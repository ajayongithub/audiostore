<?php
/** @var TapeSetController $this */
/** @var TapeSet $data */
?>
<div class="view">
                    
        <?php if (!empty($data->set_name)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('set_name')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->set_name); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->no_of_tapes)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('no_of_tapes')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->no_of_tapes); ?>
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
                
        <?php if (!empty($data->tape_start_number)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tape_start_number')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tape_start_number); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->catalogue_prefix)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('catalogue_prefix')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->catalogue_prefix); ?>
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