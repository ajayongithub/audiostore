<?php
/** @var TapeOutController $this */
/** @var TapeOut $model */
$this->breadcrumbs=array(
	'Tape Outs'=>array('index'),
	Yii::t('AweCrud.app', 'Manage'),
);

$this->menu=array(
	array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TapeOut::label(2), 'icon' => 'list', 'url' => array('index')),
	array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TapeOut::label(), 'icon' => 'plus', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('tape-out-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TapeOut::label(2) ?>    </legend>

<?php echo CHtml::link('<i class="icon-search"></i> ' . Yii::t('AweCrud.app', 'Advanced Search'), '#', array('class' => 'search-button btn')) ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
    'id' => 'tape-out-grid',
    'type' => 'striped condensed',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        //'id',
        array(
                    'name' => 'set_id',
                    'value' => 'isset($data->set) ? $data->set : null',
                    'filter' => CHtml::listData(TapeSet::model()->findAll(), 'id', TapeSet::representingColumn()),
                ),
        'given_to',
        'given_by',
        'given_on',
        'received_on',
        'category',
        'year_of_recording',
        'details',
        'start_tape_no',
        'end_tape_no',
        'status',
        'leadtime',
/*        'content',
        'duration',
        'remarks',
        'extra1',
        'extra2',
        */
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
</fieldset>