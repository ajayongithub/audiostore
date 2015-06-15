<?php
/** @var ReviewFeedbackController $this */
/** @var ReviewFeedback $model */
$this->breadcrumbs=array(
	'Review Feedbacks'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . ReviewFeedback::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . ReviewFeedback::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . ReviewFeedback::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        array(
			'name'=>'tape_reviewer_id',
			'value'=>($model->tapeReviewer !== null) ? CHtml::link($model->tapeReviewer, array('/tapeReviewer/view', 'id' => $model->tapeReviewer->id)).' ' : null,
			'type'=>'html',
		),
        array(
                'name'=>'start_time',
                'type'=>'time'
            ),
        array(
                'name'=>'end_time',
                'type'=>'time'
            ),
        'problem_type',
        'description',
        'status',
        'remarks',
        'extra',
	),
)); ?>
</fieldset>