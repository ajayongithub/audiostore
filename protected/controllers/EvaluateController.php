<?php

class EvaluateController extends Controller
{
	public function actionIndex()
	{
		$reviewCompleted = new TapeReviewer('search');
		$reviewCompleted->status = 'Review Completed' ;
	//	echo count($reviewCompleted);
		$this->render('index',array('model' => $reviewCompleted));
	}
	public function actionReview($id){
		$model = TapeReviewer::model()->findByPk($id) ;
		$reviews = new ReviewFeedback('search');
		$reviews->tape_reviewer_id = $id ;
		$this->render('review',array('model'=>$model,'reviews'=>$reviews));
	}
	public function actionUpdateStatus(){
		echo CVarDumper::dumpAsString($_REQUEST) ;
		$id = $_REQUEST['pk'];
		$feedback = ReviewFeedback::model()->findByPk($id) ;
	if($_REQUEST['name']=='eval_status'){
		$feedback->eval_status = $_REQUEST['value'];
	}else if($_REQUEST['name']=='eval_comment'){
		$feedback->eval_comment = $_REQUEST['value'];
	}
		if($feedback->save())
		echo "Success" ;
		else {
			echo "Failure" ;
		}
	}

	public function actionUpdateComment(){
		echo CVarDumper::dumpAsString($_REQUEST) ;
		$id = $_REQUEST['pk'];
		$feedback = ReviewFeedback::model()->findByPk($id) ;
		$feedback->eval_comment = $_REQUEST['value'];
		if($feedback->save())
		echo "Success" ;
		else {
			echo "Failure" ;
		}
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}
