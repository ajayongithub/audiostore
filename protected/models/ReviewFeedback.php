<?php

Yii::import('application.models._base.BaseReviewFeedback');

class ReviewFeedback extends BaseReviewFeedback
{
    /**
     * @return ReviewFeedback
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'ReviewFeedback|ReviewFeedbacks', $n);
    }

}