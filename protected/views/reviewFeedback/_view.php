<?php
/** @var ReviewFeedbackController $this */
/** @var ReviewFeedback $data */
?>
<div class="view">
                    
        <?php if (!empty($data->tapeReviewer->status)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tape_reviewer_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tapeReviewer->status); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->start_time)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('start_time')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->start_time, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->start_time)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->end_time)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('end_time')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->end_time, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->end_time)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->problem_type)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('problem_type')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->problem_type); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->description)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->description); ?>
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
                
        <?php if (!empty($data->extra)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('extra')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->extra); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>