<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proamcouple".
 *
 * @property int $id
 * @property string $NameS
 * @property string $NameT
 * @property string $SNameS
 * @property string $SNameT
 * @property string $CountryS
 * @property string $ClubS
 * @property int $user
 * @property string $tel
 * @property string $data
 * @property double $total
 * @property double $paid
 *
 * @property Users $user0
 * @property Proamregistration[] $proamregistrations
 */
class Proamcouple extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proamcouple';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NameS', 'NameT', 'SNameS', 'SNameT', 'user', 'data'], 'required'],
            [['user'], 'integer'],
            [['data'], 'safe'],
            [['total', 'paid'], 'number'],
            [['NameS', 'NameT', 'SNameS', 'SNameT', 'CountryS', 'ClubS', 'tel'], 'string', 'max' => 200],
            [['user'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'NameS' => 'Name S',
            'NameT' => 'Name T',
            'SNameS' => 'Sname S',
            'SNameT' => 'Sname T',
            'CountryS' => 'Country S',
            'ClubS' => 'Club S',
            'user' => 'User',
            'tel' => 'Tel',
            'data' => 'Data',
            'total' => 'Total',
            'paid' => 'Paid',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(Users::className(), ['id' => 'user'])->inverseOf('proamcouples');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProamregistrations()
    {
        return $this->hasMany(Proamregistration::className(), ['ProAmCouple_id' => 'id'])->inverseOf('proAmCouple');
    }
}
