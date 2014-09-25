<?php
/** @var TapeReviewerController $this */
/** @var AweActiveForm $form */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>

<?php echo $form->textFieldRow($model, 'id', array('class' => 'span5')); ?>

<?php echo $form->dropDownListRow($model, 'user', CHtml::listData(User::model()->findAll(), 'id', User::representingColumn())); ?>

<?php echo $form->dropDownListRow($model, 'tapeFile', CHtml::listData(TapeFile::model()->findAll(), 'id', TapeFile::representingColumn())); ?>

<?php echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 128)); ?>

<?php echo $form->textFieldRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 256)); ?>

<div class="form-actions">
    <?php $this->widget('bootstrap.widgets.TbButton', array(
			'type' => 'primary',
			'label' => Yii::t('AweCrud.app', 'Search'),
		)); ?>
</div>

<?php $this->endWidget(); ?>
