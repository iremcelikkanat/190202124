<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $ogrenciid
 * @property string|null $bolumadi
 * @property string|null $kitapadi
 * @property int|null $sinif
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Table[] $tables
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kitapadi'], 'required'],
            [['sinif'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['bolumadi', 'kitapadi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ogrenciid' => 'Ogrenciid',
            'bolumadi' => 'Bolumadi',
            'kitapadi' => 'Kitapadi',
            'sinif' => 'Sinif',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Tables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTables()
    {
        return $this->hasMany(Table::className(), ['userid' => 'ogrenciid']);
    }
}
