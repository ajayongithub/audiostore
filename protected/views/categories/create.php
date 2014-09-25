<?php
/** @var CategoriesController $this */
/** @var Categories $model */
$this->breadcrumbs=array(
	$model->label(2) => array('index'),
	Yii::t('AweCrud.app', 'Create'),
);

$this->menu=array(
    //array('label' => Yii::t('AweCrud.app', 'List').' '.Categories::label(2), 'icon' => 'list', 'url' => array('index')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend><?php echo Yii::t('AweCrud.app', 'Create') . ' ' . Categories::label(); ?></legend>
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</fieldset>