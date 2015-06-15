<?php

class ListingController extends Controller
{

	private function getReviewFeedback($reviewId){
		$feedbacks = Yii::app()->db->createCommand(
				"SELECT start_time, end_time, problem_type, description "
				. "FROM review_feedback "
				. " WHERE tape_reviewer_id =  ".$reviewId
				. " ORDER BY start_time ASC"
		)->queryAll();
		$retVal = array() ;
		for($feedIndx = 0 ; $feedIndx < count($feedbacks) ; $feedIndx++){
			$tapeArray = array(
				"text" => "<b>Start Time:</b>".$feedbacks[$feedIndx]['start_time'].' <b>Stop Time:</b>'.$feedbacks[$feedIndx]['end_time'].'<br/><b> Problem type: </b>'.$feedbacks[$feedIndx]['problem_type'].'<br/><b> Description:</b> '.$feedbacks[$feedIndx]['description'],
			);
			array_push($retVal,$tapeArray) ;
		}
		return $retVal ;
	}
	
	private function getTapeReviewer($fileId,$fileDetails){
		$reviews= Yii::app()->db->createCommand(
 				"SELECT username,r.status as status ,r.id as id "
				. " FROM tape_reviewer r ,user u "
				. " WHERE tape_file_id =  ".$fileId." and u.id = r.user_id"
				. " ORDER BY username ASC"
		)->queryAll();
		$retVal =  array();
		for($rIndx = 0 ; $rIndx < count($reviews) ; $rIndx++){
			$reviewObj = array(
		//		'text'=>'<a class="preview" href="'.Yii::app()->createUrl('/tapeFile/update/'.$fileId).'">'.$reviews[$rIndx]['username'].' '.' Status: '.$reviews[$rIndx]['status'].'</a>' ,	
				'text'=>'<a class="preview" url="uploads/'.$reviews[$rIndx]['id'].'_'.basename($fileDetails).'" href="#">'.$reviews[$rIndx]['username'].' '.' Status: '.$reviews[$rIndx]['status'].'</a>' ,	
				'children' => $this->getReviewFeedback($reviews[$rIndx]['id']),
			);
			array_push($retVal,$reviewObj) ;
		} 
		return $retVal ;
		
	}
	private function getTapeDetails($setNo){
		$tapeFiles = Yii::app()->db->createCommand(
				"SELECT tape_no,side,tape_no,id,file_detail "
				. "FROM tape_file "
				. " WHERE set_id =  ".$setNo
				. " ORDER BY tape_no ASC"
		)->queryAll();
		$retVal = array() ;

		
		for($fileNo = 0 ; $fileNo < count($tapeFiles) ; $fileNo++){
			$tapeArray = array(
			 "text" => "Tape No ".$tapeFiles[$fileNo]['tape_no'].' '.$tapeFiles[$fileNo]['side'],
			 "children"=>  $this->getTapeReviewer($tapeFiles[$fileNo]['id'],$tapeFiles[$fileNo]['file_detail'])) ;
			array_push($retVal,$tapeArray) ;
		}
		return $retVal ;
	}
	public function actionIndex()
	{
		$tapeSets = Yii::app()->db->createCommand(
				"SELECT set_name,id "
				. "FROM tape_set "
				. "ORDER BY set_name ASC"
        )->queryAll();
		
		$obj =   array() ;
		for($set = 0 ; $set < count($tapeSets) ; $set++){
			$setArray = array(
			 "text" => $tapeSets[$set]['set_name'],
			 "children"=>  $this->getTapeDetails($tapeSets[$set]['id'])) ;
			array_push($obj,$setArray) ;
		}
	//	$obj->text = "Tape Sets" ;
/* 		$obj = array(
				array(
						'text'=>'Set 1',
						'children'=>array(
								array('text'=>'Tape No x',
									'children'=>array(
										'text'=>'File Name',
										'children'=>array(
											'text'=>"Reviewd By XYZ",
											'children'=>array(
												array('text'=>'Feedback 1')
											),
										),
									),	
								),
						),
				),
				array(
						'text'=>'Set 2',
						'children' => array(
								array(
								 'text'=>'Tape No',
								 'children' => array(
										array('text'=>'Review 1'),
										array('text'=>'Review 2'),
										array('text'=>'Review 3'),
										array('text'=>'Review 4'),
										array('text'=>'Review 5'),
									)
						)
															
														)
															
														),
		)	; */
		$this->render('index',array('dataTree'=>$obj,));
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
	/**
	 * Fills the JS tree on an AJAX request.
	 * Should receive parent node ID in $_GET['root'],
	 *  with 'source' when there is no parent.
	 */
	public function actionAjaxFillTree()
	{
		// accept only AJAX request (comment this when debugging)
		if (!Yii::app()->request->isAjaxRequest) {
			exit();
		}
		// parse the user input
		$parentId = "NULL";
		if (isset($_GET['root']) && $_GET['root'] !== 'source') {
			$parentId = (int) $_GET['root'];
		}
		// read the data (this could be in a model)
		/* $children = Yii::app()->db->createCommand(
				"SELECT m1.id, m1.name AS text, m2.id IS NOT NULL AS hasChildren "
				. "FROM tree AS m1 LEFT JOIN tree AS m2 ON m1.id=m2.parent_id "
				. "WHERE m1.parent_id <=> $parentId "
				. "GROUP BY m1.id ORDER BY m1.name ASC"
        )->queryAll(); */
/* 				echo str_replace(
		'"hasChildren":"0"',
		'"hasChildren":false',
				CTreeView::saveDataAsJson($children)
						); */
				
				
	}
}