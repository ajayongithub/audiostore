<?php
/** @var TapeFileController $this */
/** @var TapeFile $data */
?>
<div class="view">
                    
        <?php if (!empty($data->file_detail)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('file_detail')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->file_detail); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->set->set_name)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('set_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->set->set_name); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->tape_no)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tape_no')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tape_no); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->side)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('side')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->side); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->first_date)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('first_date')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->first_date, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->first_date)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->second_date)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('second_date')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->second_date, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->second_date)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->third_date)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('third_date')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->third_date, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->third_date)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->duration)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->duration); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->content)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->content); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->keyword1)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('keyword1')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->keyword1); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->keyword2)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('keyword2')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->keyword2); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->keyword3)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('keyword3')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->keyword3); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->status)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->status); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->remarks)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->remarks); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>