<div class="form">
    <?php
    /** @var TapeReviewerController $this */
    /** @var TapeReviewer $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tape-reviewer-form',
    'enableAjaxValidation' => false,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->dropDownListRow($model, 'user', CHtml::listData(User::model()->findAll(), 'id', User::representingColumn())) ?>
                        <?php echo $form->dropDownListRow($model, 'tapeFile', CHtml::listData(TapeFile::model()->findAll(), 'id', TapeFile::representingColumn())) ?>
                        <?php //echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 128)) ?>
                        <?php echo $form->dropDownListRow($model, 'status', array('For Review','Review Completed')) ?>
                        <?php echo $form->textFieldRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 256)) ?>
                <div class="form-actions">
                <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
        <?php $this->widget('bootstrap.widgets.TbButton', array(
			//'buttonType'=>'submit',
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>