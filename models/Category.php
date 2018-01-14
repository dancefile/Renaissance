<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property int $nomer
 * @property string $name
 * @property string $date
 * @property int $agemin
 * @property int $agemax
 * @property string $clas
 *
 * @property Registration[] $registrations
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nomer', 'name'], 'required'],
            [['nomer', 'agemin', 'agemax'], 'integer'],
            [['date'], 'safe'],
            [['name'], 'string', 'max' => 250],
            [['clas'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomer' => 'Nomer',
            'name' => 'Name',
            'date' => 'Date',
            'agemin' => 'Agemin',
            'agemax' => 'Agemax',
            'clas' => 'Clas',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrations()
    {
        return $this->hasMany(Registration::className(), ['category_id' => 'id'])->inverseOf('category');
    }
}
