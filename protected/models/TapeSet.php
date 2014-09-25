<?php

Yii::import('application.models._base.BaseTapeSet');

class TapeSet extends BaseTapeSet
{
    /**
     * @return TapeSet
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'TapeSet|TapeSets', $n);
    }

}