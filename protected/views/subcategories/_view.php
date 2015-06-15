<?php
/** @var SubcategoriesController $this */
/** @var Subcategories $data */
?>
<div class="view">
                    
        <?php if (!empty($data->category->category_name)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->category->category_name); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->sub_category_name)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('sub_category_name')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->sub_category_name); ?>
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