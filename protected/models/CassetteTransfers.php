<?php

Yii::import('application.models._base.BaseCassetteTransfers');

class CassetteTransfers extends BaseCassetteTransfers
{
    /**
     * @return CassetteTransfers
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'CassetteTransfers|CassetteTransfers', $n);
    }

}