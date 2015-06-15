<div class="form">
    <?php
    /** @var CassetteHandoverDetailsController $this */
    /** @var CassetteHandoverDetails $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'cassette-handover-details-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>
<?php
$set_list = CHtml::listData(CassetteSet::model()->findAll(), 'id', 'set_name');
$user_list = CHtml::listData(YumUser::model()->findAll(), 'id', 'username');
?>
<?php //echo $form->dropDownList($model,'role_id', $role_list, $options); ?>
    
                        <?php //echo $form->textFieldRow($model, 'cassete_set_no', array('class' => 'span5')) ?>
                        <?php echo $form->dropDownListRow($model, 'cassete_set_no',$set_list ,array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'cassette_detail_from_no', array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'cassete_details_to_number', array('class' => 'span5')) ?>
                        <?php echo $form->dropDownListRow($model, 'user_given_to',$user_list, array('class' => 'span5')) ?>
                        <?php echo $form->datepickerRow($model, 'out_date', array('options'=>array('format'=>'yyyy/mm/dd')),array('prepend'=>'<i class="icon-calendar"></i>')) ?>
                        <?php echo $form->datepickerRow($model, 'in_date', array('options'=>array('format'=>'yyyy/mm/dd')),array('prepend'=>'<i class="icon-calendar"></i>')) ?>
                        <?php echo $form->dropDownListRow($model, 'given_by',$user_list, array('class' => 'span5')) ?>
                        <?php echo $form->textFieldRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 128)) ?>
                        <?php echo $form->textFieldRow($model, 'status', array('class' => 'span5', 'maxlength' => 128)) ?>
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