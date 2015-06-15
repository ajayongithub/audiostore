<div class="form">
    <?php
    /** @var TapeSetController $this */
    /** @var TapeSet $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tape-set-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'set_name', array('class' => 'span5', 'maxlength' => 256)) ?>
                        <?php echo $form->textFieldRow($model, 'no_of_tapes', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'speaker', array('class' => 'span5', 'maxlength' => 128)) ?>
                        <?php echo $form->textFieldRow($model, 'tape_start_number', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'catalogue_prefix', array('class' => 'span5', 'maxlength' => 32)) ?>
                        <?php echo $form->textFieldRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 512)) ?>
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