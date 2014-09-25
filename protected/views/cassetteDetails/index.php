<?php
/** @var CassetteDetailsController $this */
/** @var CassetteDetails $model */
$this->breadcrumbs = array(
	'Cassette Details',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . CassetteDetails::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo CassetteDetails::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>