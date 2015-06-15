<?php

class TapeReviewerController extends AweController
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
				'actions'=>array('index','view','myMail'),
				'roles'=>array('*'),
				),
			array('allow',
					'actions'=>array('markComplete','markEvaluated','myMail'),
					'users'=>array('*'),
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

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new TapeReviewer;

        $this->performAjaxValidation($model, 'tape-reviewer-form');
                Yii::log("0.0");
        if(isset($_POST['TapeReviewer']))
		{
		                Yii::log("1.0");
                if (isset($_POST['TapeReviewer']['tapeFile'])) $model->tapeFile = $_POST['TapeReviewer']['tapeFile'];
                                Yii::log("2.0");
                if (isset($_POST['TapeReviewer']['user'])) $model->user = $_POST['TapeReviewer']['user'];
                Yii::log("3.0");
			$model->attributes = $_POST['TapeReviewer'];
			                Yii::log("4.0");
/*			                if($model->validate()){
    //NO ERRORS, SO WE PERFORM SAVE PROCESS
   				// $model->save()
						}else{
    //TO SEE WHAT ERROR YOU HAVE
    CVarDumper::dump($model->getErrors(),56789,true);
    Yii::app()->end();
    //an alternative way is to show attribute errors in view
}*/
			if($model->save()) {
			                Yii::log("5.0");
				//$fileModel = TapeFile::model()->findByPk($model->tape_file_id) ;
				//$file = $fileModel->file_detail ;
				//$fileName = basename($file) ;
				//$prefix = $model->id ;
				//$destPath = Yii::getPathOfAlias('reviewPath') ;
				//copy($file, $destPath.DIRECTORY_SEPARATOR.$prefix.'_'.$fileName) ;
				                Yii::log("6.0");
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
			$model = $this->loadModel($id) ;
 			$fileModel = TapeFile::model()->findByPk($model->tape_file_id) ;
 			$file = $fileModel->file_detail ;
 			$fileName = basename($file) ;
			$prefix = $model->id ;
			$destPath = Yii::getPathOfAlias('reviewPath') ;
			//copy($file, $destPath.DIRECTORY_SEPARATOR.$prefix.'_'.$fileName) ;
			//unlink($destPath.DIRECTORY_SEPARATOR.$prefix.'_'.$fileName) ;
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

	public function actionMarkComplete(){
//		echo "To Be Completed";
		$model = TapeReviewer::model()->findByPk($_POST['TapeReviewer']['id']) ;
		$model->status = "Review Completed" ;
		$retVal = new stdClass();
		if($model->save()){
			$retVal->s = 1 ;
      $subject="Review Completed by ".Yii::app()->user->name ;
      $body="Tape Review for ".$model->tapeFile->file_detail." has been completed. ";
      $this->sendMail($subject,$body);
		}else $retVal->s = -1 ;
		echo json_encode($retVal) ;

	}

  public function actionMarkEvaluated(){
//		echo "To Be Completed";
    $model = TapeReviewer::model()->findByPk($_POST['TapeReviewer']['id']) ;
    $model->eval_status =$_POST['TapeReviewer']['eval_status'] ;
    $retVal = new stdClass();
    if($model->save()){
      $retVal->s = 1 ;
      $subject="Evaluation Completed by ".Yii::app()->user->name ;
      $body="Tape Evalaution for ".$model->tapeFile->file_detail." has been completed. ".
      " recommended action:".$model->eval_status ;
      $this->sendMail($subject,$body);
    }else{
     $retVal->error = CVarDumper::dumpAsString($model->errors);
     $retVal->s = -1 ;
   }
    echo json_encode($retVal) ;

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
	public function sendMail($subject,$body){
		$to      = 'contactus@radhanikunj.com,admin@radhanikunj.com';
		$subject = $subject ;
		$message = $body;
		$headers = 'From: admin@radhanikunj.com' . "\r\n" .
			    'Reply-To: admin@radhanikunj.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();
		Yii::import('ext.runactions.components.ERunActions');

		//	if (ERunActions::runBackground())
		//	{
				mail($to, $subject, $message, $headers);
				Yii::log("Mail Sent SUBJECT:".$subject."BODY:".$body);
		//	}else{
		//		Yii::log("Mail Could Not Be Sent SUBJECT:".$subject."BODY:".$body);
		//	}
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
}
