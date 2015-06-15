<?php

class TapeReviewer2Controller extends AweController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
    public $layout = '//layouts/column2';

public function filters() {
	return array(
			'accessControl', 
			);
}

public function accessRules() {
	return array(
			array('allow',
				'actions'=>array('index','view'),
				'roles'=>array('*'),
				),
			array('allow', 
				'actions'=>array('minicreate', 'create','update'),
				'roles'=>array('UserCreator'),
				),
			array('allow', 
				'actions'=>array('admin','delete','index','view','update','create','showAll','showTree','ajaxFillTree'),
				'users'=>array('admin'),
				),
			array('deny', 
				'users'=>array('*'),
				),
			);
}
	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view', array(
			'model' => $this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new TapeReviewer;

        $this->performAjaxValidation($model, 'tape-reviewer-form');

        if(isset($_POST['TapeReviewer']))
		{
                if (isset($_POST['TapeReviewer']['tapeFile'])) $model->tapeFile = $_POST['TapeReviewer']['tapeFile'];
                if (isset($_POST['TapeReviewer']['user'])) $model->user = $_POST['TapeReviewer']['user'];
			$model->attributes = $_POST['TapeReviewer'];
			if($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
		}

		$this->render('create',array(
			'model' => $model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model = $this->loadModel($id);

        $this->performAjaxValidation($model, 'tape-reviewer-form');

		if(isset($_POST['TapeReviewer']))
		{
                if (isset($_POST['TapeReviewer']['tapeFile'])) $model->tapeFile = $_POST['TapeReviewer']['tapeFile'];
                $model->tapeFile = array();
                if (isset($_POST['TapeReviewer']['user'])) $model->user = $_POST['TapeReviewer']['user'];
                $model->user = array();
			$model->attributes = $_POST['TapeReviewer'];
			if($model->save()) {
				$this->redirect(array('view','id' => $model->id));
            }
		}

		$this->render('update',array(
			'model' => $model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('TapeReviewer');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new TapeReviewer('search');
		$model->unsetAttributes(); // clear any default values
		if(isset($_GET['TapeReviewer']))
			$model->attributes = $_GET['TapeReviewer'];

		$this->render('admin', array(
			'model' => $model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id, $modelClass=__CLASS__)
	{
		$model = TapeReviewer::model()->findByPk($id);
		if($model === null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model, $form=null)
	{
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'tape-reviewer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	public function actionShowAll(){
		$tapeSets = TapeSet::model()->findAll();
		$files = array();
		foreach($tapeSets as $set){
			$filesForSet = TapeFile::model()->findAllByAttributes(array('set_id'=>$set->id));
			$files[$set->id] = $filesForSet;
			echo '<p>'.$set->set_name.'</p>' ;
			foreach($filesForSet as $file){
				$tapeReviewer = TapeReviewer::model()->findAllByAttributes(array('tape_file_id'=>$file->id));
				foreach($tapeReviewer as $reviewer){
					$user = User::model()->findByAttributes(array('id'=>$reviewer->user_id));
					if($reviewer->status=="Review Completed"){
						if($user){
							echo '<br/>'.$file->file_detail.' tape no '.$file->tape_no ;
							echo '<br/>Reviewed By:'.$user->username .' status '.$reviewer->status ;
						}
						$feedback = ReviewFeedback::model()->findAllByAttributes(array('tape_reviewer_id'=>$reviewer->id));
						echo '<table>';
						foreach($feedback as $point){
							echo '<tr>';
							echo '<td>'.$point->start_time.'</td>';
							echo '<td>'.$point->end_time.'</td>';
							echo '<td>'.$point->problem_type.'</td>';
							echo '<td>'.$point->description.'</td>';
							echo '</tr>';
						}
						echo '</table>';
					}
				}
				
			}
			
		}
	}
	public function actionShowTree(){
		
		$this->render('treeView',array());
	}
	public function actionAjaxFillTree(){
		// accept only AJAX request (comment this when debugging)
		if (!Yii::app()->request->isAjaxRequest) {
			exit();
		}
		// parse the user input
		$parentId = "NULL";
		if (isset($_GET['root']) && $_GET['root'] !== 'source') {
			$parentId = $_GET['root'];
		}
		$children = array();
		if($parentId=="NULL"){
			$tapeSets = TapeSet::model()->findAll();
			foreach($tapeSets as $set){
				array_push($children,array('id'=>'set_'.$set->id,'text'=>$set->set_name,'hasChildren'=>true));
			}	 
		}else{
			$req = explode('_',$parentId);
			if($req[0]=='set'){
				$filesForSet = TapeFile::model()->findAllByAttributes(array('set_id'=>$req[1]));
				foreach($filesForSet as $file){
					array_push($children,array('id'=>'file_'.$file->id,'text'=>$file->file_detail,'hasChildren'=>true));
			  	}
			}
			if($req[0]=='file'){
				$tapeReviewer = TapeReviewer::model()->findAllByAttributes(array('tape_file_id'=>$req[1]));
				foreach($tapeReviewer as $reviewer){
					$user = User::model()->findByAttributes(array('id'=>$reviewer->user_id));
					array_push($children,array('id'=>'reviewer_'.$reviewer->id,'text'=>$user->username.' status: '.$reviewer->status,'hasChildren'=>true));
			  	}
			}
			if($req[0]=='reviewer'){
				$feedback = ReviewFeedback::model()->findAllByAttributes(array('tape_reviewer_id'=>$req[1]));
				foreach($feedback as $point){
							$txt =  $point->start_time.' ';
							$txt.= $point->end_time.' ';
							$txt.= $point->problem_type.' ';
							$txt.= $point->description.' ';
					       array_push($children,array('id'=>'review_'.$point->id,'text'=>$txt,'hasChildren'=>false));
				}
			}
		}
				echo str_replace(
		'"hasChildren":"0"',
		'"hasChildren":false',
            CTreeView::saveDataAsJson($children)
		);
	}
}
