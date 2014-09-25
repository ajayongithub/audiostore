<?php

Yii::import('application.models._base.BaseSubcategories');

class Subcategories extends BaseSubcategories
{
    /**
     * @return Subcategories
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Subcategories|Subcategories', $n);
    }

}