<?php

class CassetteHandoverDetailsController extends AweController
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
    public $layout = '//layouts/column2';

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

	
	private function createCassetteDetails($model){
		for($indx = $model->cassette_detail_from_no ; $indx <= $model->cassete_details_to_number; $indx++){
			$detail = new CassetteDetails;
			$detail->cassette_set_no = $model->cassete_set_no ;
			$detail->cassette_number = $indx ;
			$detail->duration = 60 ;
			$detail->remarks = ' ' ;
			$detail->status = 0 ;
			if(!$detail->save()){
				Yii::log("Unable to save record");
			}	
					
		}
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new CassetteHandoverDetails;

        $this->performAjaxValidation($model, 'cassette-handover-details-form');

        if(isset($_POST['CassetteHandoverDetails']))
		{
			$model->attributes = $_POST['CassetteHandoverDetails'];
			if($model->save()) {
				$this->createCassetteDetails($model);
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

        $this->performAjaxValidation($model, 'cassette-handover-details-form');

		if(isset($_POST['CassetteHandoverDetails']))
		{
			$model->attributes = $_POST['CassetteHandoverDetails'];
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
		$dataProvider=new CActiveDataProvider('CassetteHandoverDetails');
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model = new CassetteHandoverDetails('search');
		$model->unsetAttributes(); // clear any default values
		if(isset($_GET['CassetteHandoverDetails']))
			$model->attributes = $_GET['CassetteHandoverDetails'];

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
		$model = CassetteHandoverDetails::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax'] === 'cassette-handover-details-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
