<?php
/** @var TapeFileController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'file_detail', array('class' => 'span5', 'maxlength' => 512)); ?>

<?php echo $form->dropDownListRow($model, 'set', CHtml::listData(TapeSet::model()->findAll(), 'id', TapeSet::representingColumn())); ?>

<?php echo $form->textFieldRow($model, 'tape_no', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'side', array('class' => 'span5', 'maxlength' => 32)); ?>

<?php echo $form->datepickerRow($model, 'first_date', array(/*'prepend'=>'<i class="icon-calendar"></i>'*/)); ?>

<?php echo $form->datepickerRow($model, 'second_date', array(/*'prepend'=>'<i class="icon-calendar"></i>'*/)); ?>

<?php echo $form->datepickerRow($model, 'third_date', array(/*'prepend'=>'<i class="icon-calendar"></i>'*/)); ?>

<?php echo $form->textFieldRow($model, 'duration', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'content', array('class' => 'span5', 'maxlength' => 512)); ?>

<?php echo $form->textFieldRow($model, 'keyword1', array('class' => 'span5', 'maxlength' => 32)); ?>

<?php echo $form->textFieldRow($model, 'keyword2', array('class' => 'span5', 'maxlength' => 32)); ?>

<?php echo $form->textFieldRow($model, 'keyword3', array('class' => 'span5', 'maxlength' => 32)); ?>

<?php echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 128)); ?>

<?php echo $form->textFieldRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 512)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
