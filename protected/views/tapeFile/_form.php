<div class="form">
    <?php
    /** @var TapeFileController $this */
    /** @var TapeFile $model */
    /** @var AweActiveForm $form */
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'id' => 'tape-file-form',
    'enableAjaxValidation' => true,
    'enableClientValidation'=> false,
    )); ?>

    <p class="note">
        <?php echo Yii::t('AweCrud.app', 'Fields with') ?> <span class="required">*</span>
        <?php echo Yii::t('AweCrud.app', 'are required') ?>.    </p>

    <?php echo $form->errorSummary($model) ?>
    <?php 
$uploadPath = Yii::getPathOfAlias('uploadPath');
$retResult = CFileHelper::findFiles($uploadPath, array('fileTypes'=>array('mp3'),)	);?>
                        <?php //echo $form->textFieldRow($model, 'file_detail', array('class' => 'span5', 'maxlength' => 512)) ?>
                        <?php echo $form->dropDownListRow($model,'file_detail',array_combine(array_values($retResult), $retResult))?>
                        <?php echo $form->dropDownListRow($model, 'set', CHtml::listData(TapeSet::model()->findAll(), 'id', TapeSet::representingColumn())) ?>
                        <?php echo $form->textFieldRow($model, 'tape_no', array('class' => 'span2')) ?>
                        <?php //echo $form->textFieldRow($model, 'side', array('class' => 'span5', 'maxlength' => 32)) ?>
                        <?php echo $form->dropDownListRow($model,'side',array('A' => 'Side A', 'B' => 'Side B', 'Combined'=>'Side A & B')) ?>
                        <?php echo $form->datepickerRow($model, 'first_date', array('options'=>array('format' => 'yyyy-mm-dd',)/*'prepend'=>'<i class="icon-calendar"></i>'*/)) ?>
                        <?php echo $form->datepickerRow($model, 'second_date', array('options'=>array('format' => 'yyyy-mm-dd',)/*'prepend'=>'<i class="icon-calendar"></i>'*/)) ?>
                        <?php echo $form->datepickerRow($model, 'third_date', array('options'=>array('format' => 'yyyy-mm-dd',)/*'prepend'=>'<i class="icon-calendar"></i>'*/)) ?>
                        <?php echo $form->textFieldRow($model, 'duration', array('class' => 'span2')) ?>
                        <?php echo $form->textAreaRow($model, 'content', array('class' => 'span5', 'maxlength' => 512)) ?>
                        <?php echo $form->textFieldRow($model, 'keyword1', array('class' => 'span2', 'maxlength' => 32)) ?>
                        <?php echo $form->textFieldRow($model, 'keyword2', array('class' => 'span2', 'maxlength' => 32)) ?>
                        <?php echo $form->textFieldRow($model, 'keyword3', array('class' => 'span2', 'maxlength' => 32)) ?>
                        <?php //echo $form->textFieldRow($model, 'status', array('class' => 'span2', 'maxlength' => 128)) ?>
                        <?php echo $form->dropDownListRow($model, 'status', array('For Review'=>'For Review','Review Completed'=>'Review Completed','Repeat Recording'=>'Repeat Recording','Accepted'=>'Accepted')); ?>
                        <?php echo $form->textAreaRow($model, 'remarks', array('class' => 'span5', 'maxlength' => 512)) ?>
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
