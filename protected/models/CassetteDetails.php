<?php

Yii::import('application.models._base.BaseCassetteDetails');

class CassetteDetails extends BaseCassetteDetails
{
    /**
     * @return CassetteDetails
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'CassetteDetails|CassetteDetails', $n);
    }

}