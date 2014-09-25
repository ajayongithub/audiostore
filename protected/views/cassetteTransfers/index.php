<?php
/** @var CassetteTransfersController $this */
/** @var CassetteTransfers $model */
$this->breadcrumbs = array(
	'Cassette Transfers',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . CassetteTransfers::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo CassetteTransfers::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>