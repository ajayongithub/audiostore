<?php
/** @var CassetteTransfersController $this */
/** @var CassetteTransfers $data */
?>
<div class="view">
                    
        <?php if (!empty($data->recording_name)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('recording_name')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->recording_name); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->speaker)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('speaker')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->speaker); ?>
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
                
        <?php if (!empty($data->year_of_recording)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('year_of_recording')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->year_of_recording); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->category)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('category')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->category); ?>
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
                
        <?php if (!empty($data->details)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('details')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->details); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->date_out)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('date_out')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->date_out, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->date_out)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->given_to)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('given_to')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->given_to); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->given_by)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('given_by')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->given_by); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->units)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('units')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->units); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->lead_time)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('lead_time')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->lead_time); ?>
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
    </div>