<?php
/** @var FileUploadController $this */
/** @var FileUpload $data */
?>
<div class="view">
                    
        <?php if (!empty($data->user_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->user_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->file_name)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('file_name')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->file_name); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->file_size)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('file_size')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->file_size); ?>
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