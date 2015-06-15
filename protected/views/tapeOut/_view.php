<?php
/** @var TapeOutController $this */
/** @var TapeOut $data */
?>
<div class="view">
                    
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
                
        <?php if (!empty($data->given_on)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('given_on')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->given_on, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->given_on)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->received_on)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('received_on')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->received_on, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->received_on)); ?>
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
                
        <?php if (!empty($data->start_tape_no)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('start_tape_no')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->start_tape_no); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->end_tape_no)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('end_tape_no')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->end_tape_no); ?>
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
                
        <?php if (!empty($data->leadtime)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('leadtime')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->leadtime); ?>
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
                
        <?php if (!empty($data->extra1)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('extra1')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->extra1); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->extra2)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('extra2')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->extra2); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>