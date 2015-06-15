<?php
/* @var $this ReviewController */
//$filePath = $prefix.'_'.basename($fileDetails->file_detail) ;
$filePath = '/uploads/'.basename($model->tapeFile->file_detail) ;
?>
	<h2>Tape No: <?php echo $model->tapeFile->tape_no?><br>Set: <?php echo $model->tapeFile->set->set_name?> </h2>
	<h4>File Name: <?php echo basename($model->tapeFile->file_detail);?></h4>
	<?php echo '<h4>Spl Instruction for review :</h4>'.$model->tapeFile->remarks;?><br/>
 <br/> <br/><br/>
	<div class="span12">
<audio controls class="span11" >
<!--  <source src="horse.ogg" type="audio/ogg">-->
  <!-- <source src="<?php echo "/audiostore/uploads/".basename($model->tapeFile->file_detail)?>" type="audio/ogg"/>-->
  <!--<source src="<?php echo "/audiostore/uploads/".basename($model->tapeFile->file_detail)?>" type="audio/mpeg"/>-->
 <!-- <source src="<?php echo Yii::app()->baseUrl."/tobereviewed/".$filePath?>" type="audio/mpeg"/>-->
 <source src="<?php echo Yii::app()->baseUrl.$model->tapeFile->file_detail?>" type="audio/mpeg"/>-->
Your browser does not support the audio element.
</audio>
</div>
<div id="completeInst" align="center">
<p>After you have completed the evaluation,<br/> Please select recommendation
	<?php echo CHtml::dropDownList('reco',$model->eval_status,array(''=>'Please Select','No Action Required' => 'No Action Required',
									'Can Be Repaired' => 'Can Be Repaired',
									'Re-Record'=> 'Re-Record',))?> and click <input type="button" id="completeBtn" class="btn btn-primary" value="Evaluation Completed" /></p>
</div>
<?php
$dProvider = $reviews->search();
$dProvider->pagination->pageSize = $reviews->count();
//    echo CVarDumper::dumpAsString($model->reviewFeedbacks) ;
//    foreach($model->reviewFeedbacks as $feedback )
//      echo $feedback->description."<br/>" ;
$this->widget('bootstrap.widgets.TbExtendedGridView',array(
  //  'id' => 'tape-reviewer-grid',
    'type' => 'striped condensed',
    'dataProvider' => $dProvider,
  //  'filter' => $reviews,
    'columns' => array(
    //   'id',
        'start_time',
        'end_time',
        'problem_type',
        'description',
        array(
            'name' => 'eval_status',
            'header' => 'Recommendation',
            'class' => 'bootstrap.widgets.TbEditableColumn',
            'headerHtmlOptions' => array('style' => 'width:200px'),
              'editable' => array(
                'type' => 'select',
                'url' => $this->createUrl("evaluate/updateStatus"),
                'source'=>array('No Action Required' => 'No Action Required',
                                'Can Be Repaired' => 'Can Be Repaired',
                                'Re-Record'=> 'Re-Record',),
            )
          ) ,     //  'eval_comment',
      array(
          'name' => 'eval_comment',
          'header' => 'Comments',
          'class' => 'bootstrap.widgets.TbEditableColumn',
          'headerHtmlOptions' => array('style' => 'width:200px'),
          'editable' => array(
              'type' => 'textarea',
              'url' => $this->createUrl('/evaluate/updateStatus'),
          )
      ),
//        'status',
//        'remarks',
		//array(
		//	'class'=>'bootstrap.widgets.TbButtonColumn',
		//),
    ), ) );
?>
<?php  $cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerScript(
		'jquery-script-1',
		'$(document).ready(function () {


$("#completeBtn").click(function(){
	var reco = $("#reco option:selected").val();
	if(reco==""){
		alert("Please select recommendation first.")
		return ;
	}

	var choice = confirm("Are you sure you want to mark the evaluation as Completed");
	if(choice==false) return ;
			$.ajax({

		 url: "/audiostore/tapeReviewer/markEvaluated",
        data: {
            "TapeReviewer[id]": "'.$model->id.'",
						"TapeReviewer[eval_status]":reco
        },
        type: "POST",
        dataType: "json",
        success: function (data) {
//            var result = $("#returnSet").append(data).find("#showresults").html();
            //$("#returnSet").html(data);
			console.log(data);
			if(data.s==1){
        		alert("Your evaluation has been marked completed!");
        	//	$("#addFeedback").hide();
				//$("#completeInst").hide();
 			}else{
			alert("Unable to mark as completed! Please try after some time.");
			}
        },
        error: function (xhr, status) {
            alert("Sorry, there was a problem!");
        },
        complete: function (xhr, status) {
            //$("#showresults").slideDown("slow")
        }
    	}
					);
});

	});
',
		CClientScript::POS_END
);

?>
