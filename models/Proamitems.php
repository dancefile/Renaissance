<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proamitems".
 *
 * @property int $id
 * @property int $ProAmGroup_id
 * @property string $name
 * @property string $Dances
 * @property string $Ages
 * @property string $Skills
 * @property double $Price1
 * @property double $Price2
 *
 * @property Proamgroup $proAmGroup
 * @property Proamregistration[] $proamregistrations
 */
class Proamitems extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proamitems';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProAmGroup_id', 'name', 'Dances', 'Price1', 'Price2'], 'required'],
            [['ProAmGroup_id'], 'integer'],
            [['Price1', 'Price2'], 'number'],
            [['name', 'Dances', 'Ages', 'Skills'], 'string', 'max' => 200],
            [['ProAmGroup_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proamgroup::className(), 'targetAttribute' => ['ProAmGroup_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ProAmGroup_id' => 'Pro Am Group ID',
            'name' => 'Name',
            'Dances' => 'Dances',
            'Ages' => 'Ages',
            'Skills' => 'Skills',
            'Price1' => 'Price1',
            'Price2' => 'Price2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProAmGroup()
    {
        return $this->hasOne(Proamgroup::className(), ['id' => 'ProAmGroup_id'])->inverseOf('proamitems');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProamregistrations()
    {
        return $this->hasMany(Proamregistration::className(), ['ProAmItems_id' => 'id'])->inverseOf('proAmItems');
    }
}
