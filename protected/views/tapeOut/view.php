<?php
/** @var TapeOutController $this */
/** @var TapeOut $model */
$this->breadcrumbs=array(
	'Tape Outs'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TapeOut::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TapeOut::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TapeOut::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        array(
			'name'=>'set_id',
			'value'=>($model->set !== null) ? CHtml::link($model->set, array('/tapeSet/view', 'id' => $model->set->id)).' ' : null,
			'type'=>'html',
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
        'content',
        'duration',
        'remarks',
        'extra1',
        'extra2',
	),
)); ?>
</fieldset>