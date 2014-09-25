<?php

/**
 * This is the model base class for the table "subcategories".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Subcategories".
 *
 * Columns in table "subcategories" available as properties of the model,
 * followed by relations of table "subcategories" available as properties of the model.
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $sub_category_name
 * @property string $remarks
 *
 * @property Categories $category
 */
abstract class BaseSubcategories extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'subcategories';
    }

    public static function representingColumn() {
        return 'sub_category_name';
    }

    public function rules() {
        return array(
            array('category_id, sub_category_name', 'required'),
            array('category_id', 'numerical', 'integerOnly'=>true),
            array('sub_category_name', 'length', 'max'=>128),
            array('remarks', 'length', 'max'=>256),
            array('remarks', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, category_id, sub_category_name, remarks', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'category' => array(self::BELONGS_TO, 'Categories', 'category_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'category_id' => Yii::t('app', 'Category'),
                'sub_category_name' => Yii::t('app', 'Sub Category Name'),
                'remarks' => Yii::t('app', 'Remarks'),
                'category' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('category_id', $this->category_id);
        $criteria->compare('sub_category_name', $this->sub_category_name, true);
        $criteria->compare('remarks', $this->remarks, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}