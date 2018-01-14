<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "proamskills".
 *
 * @property int $id
 * @property string $name
 *
 * @property Proamregistration[] $proamregistrations
 */
class Proamskills extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proamskills';
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
    public function getProamregistrations()
    {
        return $this->hasMany(Proamregistration::className(), ['ProAmSkills_id' => 'id'])->inverseOf('proAmSkills');
    }
}
