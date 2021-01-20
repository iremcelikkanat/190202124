<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "table".
 *
 * @property int $bookid
 * @property string|null $yazaradi
 * @property int|null $userid
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Student $user
 */
class Table extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userid'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['yazaradi'], 'string', 'max' => 255],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => Student::className(), 'targetAttribute' => ['userid' => 'ogrenciid']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookid' => 'Bookid',
            'yazaradi' => 'Yazaradi',
            'userid' => 'Userid',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Student::className(), ['ogrenciid' => 'userid']);
    }
}
