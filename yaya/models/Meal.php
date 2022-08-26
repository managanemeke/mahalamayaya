<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meal".
 *
 * @property int $id
 * @property string $name
 * @property string $composition
 * @property double $price
 * @property int $section_id
 *
 * @property Section $section
 * @property Order[] $orders
 */
class Meal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'composition', 'price'], 'required'],
            [['price'], 'number'],
            [['section_id'], 'integer'],
            [['name', 'composition'], 'string', 'max' => 255],
            [['name'], 'unique'],
            [['section_id'], 'exist', 'skipOnError' => true, 'targetClass' => Section::className(), 'targetAttribute' => ['section_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'composition' => 'Composition',
            'price' => 'Price',
            'section_id' => 'Section ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(Section::className(), ['id' => 'section_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Order::className(), ['meal_id' => 'id']);
    }
}
