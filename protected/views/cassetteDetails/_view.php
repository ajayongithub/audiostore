<?php
/** @var CassetteDetailsController $this */
/** @var CassetteDetails $data */
?>
<div class="view">
                    
        <?php if (!empty($data->cassette_set_no)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('cassette_set_no')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cassette_set_no); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->cassette_number)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('cassette_number')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cassette_number); ?>
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