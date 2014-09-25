<?php

Yii::import('application.models._base.BaseTapeFile');

class TapeFile extends BaseTapeFile
{
    /**
     * @return TapeFile
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'TapeFile|TapeFiles', $n);
    }

}