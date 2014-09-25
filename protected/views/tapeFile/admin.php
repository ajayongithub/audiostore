<?php
/** @var TapeFileController $this */
/** @var TapeFile $model */
$this->breadcrumbs=array(
	'Tape Files'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TapeFile::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TapeFile::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tape-file-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TapeFile::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'tape-file-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
//        'id',
        'file_detail',
        array(
                    'name' => 'set_id',
                    'value' => 'isset($data->set) ? $data->set : null',
                    'filter' => CHtml::listData(TapeSet::model()->findAll(), 'id', TapeSet::representingColumn()),
                ),
        'tape_no',
        'side',
        'first_date',
        /*
        'second_date',
        'third_date',
        'duration',*/
        'content',
        /*'keyword1',
        'keyword2',
        'keyword3',*/
        'status',
/*        'remarks',
        */
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>