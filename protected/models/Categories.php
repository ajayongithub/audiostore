<?php

Yii::import('application.models._base.BaseCategories');

class Categories extends BaseCategories
{
    /**
     * @return Categories
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Categories|Categories', $n);
    }

}