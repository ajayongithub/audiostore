<?php

Yii::import('application.models._base.BaseCassetteSet');

class CassetteSet extends BaseCassetteSet
{
    /**
     * @return CassetteSet
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'CassetteSet|CassetteSets', $n);
    }

}