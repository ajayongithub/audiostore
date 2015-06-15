<?php
/* @var $this EvaluateController */

$this->breadcrumbs=array(
	'Evaluate',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'tape-reviewer-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
                    'name' => 'user_id',
                    'value' => 'isset($data->user) ? $data->user : null',
                    'filter' => CHtml::listData(User::model()->findAll(), 'id', User::representingColumn()),
                ),
        array(
                    'name' => 'tape_file_id',
                    'value' => 'isset($data->tapeFile) ? $data->tapeFile : null',
                    'filter' => CHtml::listData(TapeFile::model()->findAll(), 'id', TapeFile::representingColumn()),
                ),
        'eval_status',
        'remarks',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
			'template'=>'{evaluate}',
			'buttons'=>array(
					'evaluate'=>array(
						'label'=>'Evaluate',
						'url'=>'Yii::app()->createUrl("evaluate/review/id/".$data->id)',
					),
		),
		),
	),
)); ?>
