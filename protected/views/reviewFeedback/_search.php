<?php
/** @var ReviewFeedbackController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'tapeReviewer', CHtml::listData(TapeReviewer::model()->findAll(), 'id', TapeReviewer::representingColumn())); ?>

<?php echo $form->textFieldRow($model, 'start_time', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'end_time', array('class' => 'span5')); ?>

<?php echo $form->textFieldRow($model, 'problem_type', array('class' => 'span5', 'maxlength' => 128)); ?>

<?php echo $form->textFieldRow($model, 'description', array('class' => 'span5', 'maxlength' => 512)); ?>

<?php echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 64)); ?>

<?php echo $form->textFieldRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 512)); ?>

<?php echo $form->textFieldRow($model, 'extra', array('class' => 'span5', 'maxlength' => 128)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
