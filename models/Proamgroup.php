<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proamgroup".
 *
 * @property int $id
 * @property int $ProAmCategory_id
 * @property string $name
 *
 * @property Proamcategory $proAmCategory
 * @property Proamitems[] $proamitems
 */
class Proamgroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proamgroup';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProAmCategory_id', 'name'], 'required'],
            [['ProAmCategory_id'], 'integer'],
            [['name'], 'string', 'max' => 200],
            [['ProAmCategory_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proamcategory::className(), 'targetAttribute' => ['ProAmCategory_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ProAmCategory_id' => 'Pro Am Category ID',
            'name' => 'Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProAmCategory()
    {
        return $this->hasOne(Proamcategory::className(), ['id' => 'ProAmCategory_id'])->inverseOf('proamgroups');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProamitems()
    {
        return $this->hasMany(Proamitems::className(), ['ProAmGroup_id' => 'id'])->inverseOf('proAmGroup');
    }
}
