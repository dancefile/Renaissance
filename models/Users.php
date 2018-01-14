<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $ruls
 *
 * @property Couple[] $couples
 * @property Proamcouple[] $proamcouples
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['name'], 'string', 'max' => 200],
            [['email', 'password', 'ruls'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
            'ruls' => 'Ruls',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCouples()
    {
        return $this->hasMany(Couple::className(), ['user' => 'id'])->inverseOf('user0');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProamcouples()
    {
        return $this->hasMany(Proamcouple::className(), ['user' => 'id'])->inverseOf('user0');
    }
}
