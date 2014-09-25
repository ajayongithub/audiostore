<?php

Yii::import('application.models._base.BaseTapeOut');

class TapeOut extends BaseTapeOut
{
    /**
     * @return TapeOut
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'TapeOut|TapeOuts', $n);
    }

}