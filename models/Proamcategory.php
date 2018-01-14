<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proamcategory".
 *
 * @property int $id
 * @property string $name
 *
 * @property Proamgroup[] $proamgroups
 */
class Proamcategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proamcategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 200],
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
    public function getProamgroups()
    {
        return $this->hasMany(Proamgroup::className(), ['ProAmCategory_id' => 'id'])->inverseOf('proAmCategory');
    }
}
