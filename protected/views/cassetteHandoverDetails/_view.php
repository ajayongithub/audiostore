<?php
/** @var CassetteHandoverDetailsController $this */
/** @var CassetteHandoverDetails $data */
?>
<div class="view">
                    
        <?php if (!empty($data->cassete_set_no)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('cassete_set_no')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cassete_set_no); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->cassette_detail_from_no)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('cassette_detail_from_no')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cassette_detail_from_no); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->cassete_details_to_number)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('cassete_details_to_number')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cassete_details_to_number); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->user_given_to)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('user_given_to')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->user_given_to); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->out_date)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('out_date')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->out_date, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->out_date)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->in_date)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('in_date')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->in_date, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->in_date)); ?>
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