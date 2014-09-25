<?php
/** @var TapeReviewerController $this */
/** @var TapeReviewer $model */
$this->breadcrumbs=array(
	'Tape Reviewers'=>array('index'),
	$model->id,
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List') . ' ' . TapeReviewer::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . TapeReviewer::label(), 'icon' => 'plus', 'url' => array('create')),
	array('label' => Yii::t('AweCrud.app', 'Update'), 'icon' => 'pencil', 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('AweCrud.app', 'Delete'), 'icon' => 'trash', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => Yii::t('AweCrud.app', 'Are you sure you want to delete this item?'))),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'View') . ' ' . TapeReviewer::label(); ?> <?php echo CHtml::encode($model) ?></legend>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data' => $model,
	'attributes' => array(
        'id',
        array(
			'name'=>'user_id',
			'value'=>($model->user !== null) ? CHtml::link($model->user, array('/user/view', 'id' => $model->user->id)).' ' : null,
			'type'=>'html',
		),
        array(
			'name'=>'tape_file_id',
			'value'=>($model->tapeFile !== null) ? CHtml::link($model->tapeFile, array('/tapeFile/view', 'id' => $model->tapeFile->id)).' ' : null,
			'type'=>'html',
		),
        'status',
        'remarks',
	),
)); ?>
</fieldset>