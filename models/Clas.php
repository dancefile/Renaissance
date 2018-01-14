<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clas".
 *
 * @property int $id
 * @property string $name
 *
 * @property Couple[] $couples
 * @property Couple[] $couples0
 * @property Couple[] $couples1
 * @property Couple[] $couples2
 */
class Clas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 50],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCouples()
    {
        return $this->hasMany(Couple::className(), ['clas_id_st_m' => 'id'])->inverseOf('clasIdStM');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCouples0()
    {
        return $this->hasMany(Couple::className(), ['clas_id_la_m' => 'id'])->inverseOf('clasIdLaM');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCouples1()
    {
        return $this->hasMany(Couple::className(), ['clas_id_st_w' => 'id'])->inverseOf('clasIdStW');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCouples2()
    {
        return $this->hasMany(Couple::className(), ['clas_id_la_w' => 'id'])->inverseOf('clasIdLaW');
    }
}
