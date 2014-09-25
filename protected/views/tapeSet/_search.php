<?php
/** @var TapeSetController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'set_name', array('class' => 'span5', 'maxlength' => 256)); ?>

<?php echo $form->textFieldRow($model, 'no_of_tapes', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'speaker', array('class' => 'span5', 'maxlength' => 128)); ?>

<?php echo $form->textFieldRow($model, 'tape_start_number', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'catalogue_prefix', array('class' => 'span5', 'maxlength' => 32)); ?>

<?php echo $form->textFieldRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 512)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
