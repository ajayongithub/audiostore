<?php
/** @var CassetteTransfersController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'recording_name', array('class' => 'span5', 'maxlength' => 256)); ?>

<?php echo $form->textFieldRow($model, 'speaker', array('class' => 'span5', 'maxlength' => 128)); ?>

<?php echo $form->textFieldRow($model, 'content', array('class' => 'span5', 'maxlength' => 512)); ?>

<?php echo $form->textFieldRow($model, 'year_of_recording', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'category', array('class' => 'span5', 'maxlength' => 128)); ?>

<?php echo $form->textFieldRow($model, 'duration', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'details', array('class' => 'span5', 'maxlength' => 512)); ?>

<?php echo $form->datepickerRow($model, 'date_out', array(/*'prepend'=>'<i class="icon-calendar"></i>'*/)); ?>

<?php echo $form->textFieldRow($model, 'given_to', array('class' => 'span5', 'maxlength' => 128)); ?>

<?php echo $form->textFieldRow($model, 'given_by', array('class' => 'span5', 'maxlength' => 128)); ?>

<?php echo $form->textFieldRow($model, 'units', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'lead_time', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 512)); ?>

<?php echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 32)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
