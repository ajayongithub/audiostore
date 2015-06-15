<div class="form">
    <?php
    /** @var ReviewFeedbackController $this */
    /** @var ReviewFeedback $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'review-feedback-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->dropDownListRow($model, 'tapeReviewer', CHtml::listData(TapeReviewer::model()->findAll(), 'id', TapeReviewer::representingColumn())) ?>
                        <?php echo $form->textFieldRow($model, 'start_time', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'end_time', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'problem_type', array('class' => 'span5', 'maxlength' => 128)) ?>
                        <?php echo $form->textFieldRow($model, 'description', array('class' => 'span5', 'maxlength' => 512)) ?>
                        <?php echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 64)) ?>
                        <?php echo $form->textFieldRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 512)) ?>
                        <?php echo $form->textFieldRow($model, 'extra', array('class' => 'span5', 'maxlength' => 128)) ?>
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