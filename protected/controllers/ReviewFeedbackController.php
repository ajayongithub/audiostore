<?php

class ReviewFeedbackController extends AweController
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
				'actions'=>array('index','view','create','delete','postCreate'),
				//'roles'=>array('*'),
					'users'=>array('*')
				),
			array('allow', 
				'actions'=>array('minicreate', 'create','update'),
				'roles'=>array('UserCreator'),
				),
			array('allow', 
				'actions'=>array('admin','delete','create','update','index','view'),
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


	public function actionPostCreate(){
		
	//	echo print_r($_REQUEST,true) ;
		
		 $model  = new ReviewFeedback;

		$model->attributes = $_REQUEST['ReviewFeedback'];
 		echo $this->renderPartial('postCreate', array(
					'model' => $model,),true); 
 	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new ReviewFeedback;

        $this->performAjaxValidation($model, 'review-feedback-form');

        if(isset($_POST['ReviewFeedback']))
		{
                if (isset($_POST['ReviewFeedback']['tapeReviewer'])) $model->tapeReviewer = $_POST['ReviewFeedback']['tapeReviewer'];
			$model->attributes = $_POST['ReviewFeedback'];
			if($model->save()) {
		//		$model->unsetAttributes(); // clear any default values	
		//		echo $this->renderPartial('postCreate', array(
		//			'model' => $model,),true);
		//		return;		
                $this->redirect(array('postCreate', 'ReviewFeedback[tape_reviewer_id]' => $model->tape_reviewer_id));
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

        $this->performAjaxValidation($model, 'review-feedback-form');

		if(isset($_POST['ReviewFeedback']))
		{
                if (isset($_POST['ReviewFeedback']['tapeReviewer'])) $model->tapeReviewer = $_POST['ReviewFeedback']['tapeReviewer'];
                $model->tapeReviewer = array();
			$model->attributes = $_POST['ReviewFeedback'];
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
		//if(Yii::app()->request->isPostRequest)
		//{
			// we only allow deletion via POST request
			$model = $this->loadModel($id);
			$reviewerId = $model->tape_reviewer_id ;
			$model->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			//if(!isset($_GET['ajax']))
			//	echo $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('postCreate'));
			//echo $this->redirect(array('postCreate','id' => $reviewerId));
			$this->redirect(array('postCreate', 'id' => $model->id));
			//echo "Hello World";
		//}
		//else
		//	throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ReviewFeedback');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new ReviewFeedback('search');
		$model->unsetAttributes(); // clear any default values
		if(isset($_GET['ReviewFeedback']))
			$model->attributes = $_GET['ReviewFeedback'];

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
		$model = ReviewFeedback::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'review-feedback-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
