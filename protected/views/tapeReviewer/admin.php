<?php
/** @var TapeReviewerController $this */
/** @var TapeReviewer $model */
$this->breadcrumbs=array(
	'Tape Reviewers'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TapeReviewer::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TapeReviewer::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tape-reviewer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TapeReviewer::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

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
        'status',
        'remarks',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>