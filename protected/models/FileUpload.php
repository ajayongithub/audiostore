<?php

Yii::import('application.models._base.BaseFileUpload');

class FileUpload extends BaseFileUpload
{
    /**
     * @return FileUpload
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'FileUpload|FileUploads', $n);
    }

}