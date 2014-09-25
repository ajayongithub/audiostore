<?php
/** @var TapeOutController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php //echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'set', CHtml::listData(TapeSet::model()->findAll(), 'id', TapeSet::representingColumn())); ?>

<?php echo $form->textFieldRow($model, 'given_to', array('class' => 'span3', 'maxlength' => 32)); ?>

<?php echo $form->textFieldRow($model, 'given_by', array('class' => 'span3', 'maxlength' => 32)); ?>

<?php echo $form->datepickerRow($model, 'given_on', array(/*'prepend'=>'<i class="icon-calendar"></i>'*/)); ?>

<?php echo $form->datepickerRow($model, 'received_on', array(/*'prepend'=>'<i class="icon-calendar"></i>'*/)); ?>

<?php echo $form->textFieldRow($model, 'category', array('class' => 'span2', 'maxlength' => 128)); ?>

<?php echo $form->textFieldRow($model, 'year_of_recording', array('class' => 'span2')); ?>

<?php echo $form->textFieldRow($model, 'details', array('class' => 'span3', 'maxlength' => 512)); ?>

<?php echo $form->textFieldRow($model, 'start_tape_no', array('class' => 'span2')); ?>

<?php echo $form->textFieldRow($model, 'end_tape_no', array('class' => 'span2')); ?>

<?php echo $form->textFieldRow($model, 'status', array('class' => 'span3', 'maxlength' => 32)); ?>

<?php echo $form->textFieldRow($model, 'leadtime', array('class' => 'span2')); ?>

<?php echo $form->textAreaRow($model, 'content', array('class' => 'span5', 'maxlength' => 256)); ?>

<?php echo $form->textFieldRow($model, 'duration', array('class' => 'span2')); ?>

<?php echo $form->textAreaRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 512)); ?>

<?php //echo $form->textFieldRow($model, 'extra1', array('class' => 'span5', 'maxlength' => 256)); ?>

<?php //echo $form->textFieldRow($model, 'extra2', array('class' => 'span5')); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
