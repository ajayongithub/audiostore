<h4>List of Feedback Points submitted:</h4>
<?php 
$dProvider = $model->search();
$dProvider->pagination->pageSize = $model->count();
//$dPriver->pagination = array('pageSize' => 100);
$this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'review-feedback-grid',
    'type' => 'striped condensed',
    'dataProvider' => $dProvider,
   // 'filter' => $model,
		
    'columns' => array(
//        'id',
//         array(
//                     'name' => 'tape_reviewer_id',
//                     'value' => 'isset($data->tapeReviewer) ? $data->tapeReviewer : null',
//                     'filter' => CHtml::listData(TapeReviewer::model()->findAll(), 'id', TapeReviewer::representingColumn()),
//                 ),
	    'start_time',
        'end_time',
        'problem_type',
        'description',
        /*
        'status',
        'remarks',
        'extra',
        */
// 		array(
// 			'class'=>'bootstrap.widgets.TbButtonColumn',
// 			'template'=>'{delete}',
// 'buttons' => array
// (
// 		'delete'=>array(
// 		'label'=>'Delete this feedback',
// 		//'imageUrl'=>Yii::app()->request->baseUrl.'/images/email.png',
// 		//'url'=>'Yii::app()->createUrl("reviewFeedback/delete", array("id"=>$data->id))',
// 	),
// ),
// 		),
	),
)); ?>
</fieldset>