<div class="form">
    <?php
    /** @var CassetteTransfersController $this */
    /** @var CassetteTransfers $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'cassette-transfers-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>

                            <?php echo $form->textFieldRow($model, 'recording_name', array('class' => 'span5', 'maxlength' => 256)) ?>
                        <?php echo $form->textFieldRow($model, 'speaker', array('class' => 'span3', 'maxlength' => 128)) ?>
                        <?php echo $form->textAreaRow($model, 'content', array('class' => 'span5', 'maxlength' => 512)) ?>
                        <?php echo $form->textFieldRow($model, 'year_of_recording', array('class' => 'span2')) ?>
                        <?php echo $form->textFieldRow($model, 'category', array('class' => 'span3', 'maxlength' => 128)) ?>
                        <?php echo $form->textFieldRow($model, 'duration', array('class' => 'span2')) ?>
                        <?php echo $form->textAreaRow($model, 'details', array('class' => 'span5', 'maxlength' => 512)) ?>
                        <?php echo $form->datepickerRow($model, 'date_out', array(/*'prepend'=>'<i class="icon-calendar"></i>'*/)) ?>
                        <?php echo $form->textFieldRow($model, 'given_to', array('class' => 'span3', 'maxlength' => 128)) ?>
                        <?php echo $form->textFieldRow($model, 'given_by', array('class' => 'span3', 'maxlength' => 128)) ?>
                        <?php echo $form->textFieldRow($model, 'units', array('class' => 'span2')) ?>
                        <?php echo $form->textFieldRow($model, 'lead_time', array('class' => 'span2')) ?>
                        <?php echo $form->textAreaRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 512)) ?>
                        <?php echo $form->textFieldRow($model, 'status', array('class' => 'span3', 'maxlength' => 32)) ?>
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