<?php
/** @var TapeReviewerController $this */
/** @var TapeReviewer $data */
?>
<div class="view">
                    
        <?php if (!empty($data->user->username)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->user->username); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->tapeFile->file_detail)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tape_file_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tapeFile->file_detail); ?>
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