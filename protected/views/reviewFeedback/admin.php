<?php
/** @var ReviewFeedbackController $this */
/** @var ReviewFeedback $model */
$this->breadcrumbs=array(
	'Review Feedbacks'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . ReviewFeedback::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . ReviewFeedback::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('review-feedback-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo ReviewFeedback::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'review-feedback-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'id',
        array(
                    'name' => 'tape_reviewer_id',
                    'value' => 'isset($data->tapeReviewer) ? $data->tapeReviewer : null',
                    'filter' => CHtml::listData(TapeReviewer::model()->findAll(), 'id', TapeReviewer::representingColumn()),
                ),
        'start_time',
        'end_time',
        'problem_type',
        'description',
        /*
        'status',
        'remarks',
        'extra',
        */
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>