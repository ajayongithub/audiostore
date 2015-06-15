<?php
/** @var CategoriesController $this */
/** @var Categories $data */
?>
<div class="view">
                    
        <?php if (!empty($data->category_name)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('category_name')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->category_name); ?>
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