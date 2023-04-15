<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property resource $photo
 * @property string $name
 * @property int $price
 * @property string $countryorigin
 * @property string $release
 * @property string $model
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['photo', 'name', 'price', 'countryorigin', 'release', 'model'], 'required'],
            [['photo'], 'string'],
            [['price'], 'integer'],
            [['release'], 'safe'],
            [['name', 'countryorigin', 'model'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo' => 'Photo',
            'name' => 'Name',
            'price' => 'Price',
            'countryorigin' => 'Countryorigin',
            'release' => 'Release',
            'model' => 'Model',
        ];
    }
}
