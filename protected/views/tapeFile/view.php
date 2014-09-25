<?php
/** @var TapeFileController $this */
/** @var TapeFile $model */
$this->breadcrumbs=array(
	'Tape Files'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TapeFile::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TapeFile::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TapeFile::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        'file_detail',
        array(
			'name'=>'set_id',
			'value'=>($model->set !== null) ? CHtml::link($model->set, array('/tapeSet/view', 'id' => $model->set->id)).' ' : null,
			'type'=>'html',
		),
        'tape_no',
        'side',
        'first_date',
        'second_date',
        'third_date',
        'duration',
        'content',
        'keyword1',
        'keyword2',
        'keyword3',
        'status',
        'remarks',
	),
)); ?>
</fieldset>