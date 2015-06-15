<?php
/** @var CassetteDetailsController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'cassette_set_no', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'cassette_number', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'duration', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'status', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 128)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
