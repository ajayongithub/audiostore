<?php

/**
 * This is the model base class for the table "categories".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Categories".
 *
 * Columns in table "categories" available as properties of the model,
 * followed by relations of table "categories" available as properties of the model.
 *
 * @property integer $id
 * @property string $category_name
 * @property string $remarks
 *
 * @property Subcategories[] $subcategories
 */
abstract class BaseCategories extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'categories';
    }

    public static function representingColumn() {
        return 'category_name';
    }

    public function rules() {
        return array(
            array('category_name', 'required'),
            array('category_name, remarks', 'length', 'max'=>128),
            array('remarks', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, category_name, remarks', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'subcategories' => array(self::HAS_MANY, 'Subcategories', 'category_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'category_name' => Yii::t('app', 'Category Name'),
                'remarks' => Yii::t('app', 'Remarks'),
                'subcategories' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('category_name', $this->category_name, true);
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