<?php

Yii::import('application.models._base.BaseTapeReviewer');

class TapeReviewer extends BaseTapeReviewer
{
    /**
     * @return TapeReviewer
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'TapeReviewer|TapeReviewers', $n);
    }

}