<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proamregistration".
 *
 * @property int $id
 * @property int $ProAmCouple_id
 * @property int $ProAmItems_id
 * @property int $ProAmSkills_id
 * @property int $ProAmAges_id
 * @property double $Price
 *
 * @property Proamcouple $proAmCouple
 * @property Proamitems $proAmItems
 * @property Proamskills $proAmSkills
 * @property Proamages $proAmAges
 */
class Proamregistration extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proamregistration';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProAmCouple_id', 'ProAmItems_id', 'ProAmSkills_id', 'ProAmAges_id', 'Price'], 'required'],
            [['ProAmCouple_id', 'ProAmItems_id', 'ProAmSkills_id', 'ProAmAges_id'], 'integer'],
            [['Price'], 'number'],
            [['ProAmCouple_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proamcouple::className(), 'targetAttribute' => ['ProAmCouple_id' => 'id']],
            [['ProAmItems_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proamitems::className(), 'targetAttribute' => ['ProAmItems_id' => 'id']],
            [['ProAmSkills_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proamskills::className(), 'targetAttribute' => ['ProAmSkills_id' => 'id']],
            [['ProAmAges_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proamages::className(), 'targetAttribute' => ['ProAmAges_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ProAmCouple_id' => 'Pro Am Couple ID',
            'ProAmItems_id' => 'Pro Am Items ID',
            'ProAmSkills_id' => 'Pro Am Skills ID',
            'ProAmAges_id' => 'Pro Am Ages ID',
            'Price' => 'Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProAmCouple()
    {
        return $this->hasOne(Proamcouple::className(), ['id' => 'ProAmCouple_id'])->inverseOf('proamregistrations');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProAmItems()
    {
        return $this->hasOne(Proamitems::className(), ['id' => 'ProAmItems_id'])->inverseOf('proamregistrations');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProAmSkills()
    {
        return $this->hasOne(Proamskills::className(), ['id' => 'ProAmSkills_id'])->inverseOf('proamregistrations');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProAmAges()
    {
        return $this->hasOne(Proamages::className(), ['id' => 'ProAmAges_id'])->inverseOf('proamregistrations');
    }
}
