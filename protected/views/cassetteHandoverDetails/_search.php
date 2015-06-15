<?php
/** @var CassetteHandoverDetailsController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'cassete_set_no', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'cassette_detail_from_no', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'cassete_details_to_number', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'user_given_to', array('class' => 'span5')); ?>

<?php echo $form->datepickerRow($model, 'out_date', array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->datepickerRow($model, 'in_date', array('prepend'=>'<i class="icon-calendar"></i>')); ?>

<?php echo $form->textFieldRow($model, 'given_by', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 128)); ?>

<?php echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 128)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
