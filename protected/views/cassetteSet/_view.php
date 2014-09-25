<?php
/** @var CassetteSetController $this */
/** @var CassetteSet $data */
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
                
        <?php if (!empty($data->no_of_cassettes)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('no_of_cassettes')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->no_of_cassettes); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>