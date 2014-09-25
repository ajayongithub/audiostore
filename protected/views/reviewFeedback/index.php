<?php
/** @var ReviewFeedbackController $this */
/** @var ReviewFeedback $model */
$this->breadcrumbs = array(
	'Review Feedbacks',
);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create') . ' ' . ReviewFeedback::label(), 'icon' => 'plus', 'url' => array('create')),
    array('label' => Yii::t('AweCrud.app', 'Manage'), 'icon' => 'list-alt', 'url' => array('admin')),
);
?>

<fieldset>
    <legend>
        <?php echo Yii::t('AweCrud.app', 'List') ?> <?php echo ReviewFeedback::label(2) ?>    </legend>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider' => $dataProvider,
	'itemView' => '_view',
)); ?>
</fieldset>