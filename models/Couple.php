<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "couple".
 *
 * @property int $id
 * @property string $name_m
 * @property string $sname_m
 * @property string $date_m
 * @property int $clas_id_st_m
 * @property int $clas_id_la_m
 * @property string $club_m
 * @property string $city_m
 * @property string $country_m
 * @property string $name_w
 * @property string $sname_w
 * @property string $club_w
 * @property string $date_w
 * @property string $city_w
 * @property string $country_w
 * @property int $clas_id_st_w
 * @property int $clas_id_la_w
 * @property string $trener1_n_st
 * @property string $trener1_sn_st
 * @property string $trener2_n_st
 * @property string $trener2_sn_st
 * @property string $trener3_n_st
 * @property string $trener3_sn_st
 * @property string $trener1_n_la
 * @property string $trener1_sn_la
 * @property string $trener2_n_la
 * @property string $trener2_sn_la
 * @property string $trener3_n_la
 * @property string $trener3_sn_la
 * @property int $user
 *
 * @property Clas $clasIdStM
 * @property Clas $clasIdLaM
 * @property Clas $clasIdStW
 * @property Clas $clasIdLaW
 * @property Users $user0
 * @property Registration[] $registrations
 */
class Couple extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'couple';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_m', 'date_w'], 'safe'],
            [['clas_id_st_m', 'clas_id_la_m', 'clas_id_st_w', 'clas_id_la_w', 'user'], 'integer'],
            [['name_m', 'sname_m', 'club_m', 'city_m', 'country_m', 'name_w', 'sname_w', 'club_w', 'city_w', 'country_w', 'trener1_n_st', 'trener1_sn_st', 'trener2_n_st', 'trener2_sn_st', 'trener3_n_st', 'trener3_sn_st', 'trener1_n_la', 'trener1_sn_la', 'trener2_n_la', 'trener2_sn_la', 'trener3_n_la', 'trener3_sn_la'], 'string', 'max' => 200],
            [['clas_id_st_m'], 'exist', 'skipOnError' => true, 'targetClass' => Clas::className(), 'targetAttribute' => ['clas_id_st_m' => 'id']],
            [['clas_id_la_m'], 'exist', 'skipOnError' => true, 'targetClass' => Clas::className(), 'targetAttribute' => ['clas_id_la_m' => 'id']],
            [['clas_id_st_w'], 'exist', 'skipOnError' => true, 'targetClass' => Clas::className(), 'targetAttribute' => ['clas_id_st_w' => 'id']],
            [['clas_id_la_w'], 'exist', 'skipOnError' => true, 'targetClass' => Clas::className(), 'targetAttribute' => ['clas_id_la_w' => 'id']],
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
            'name_m' => 'Name M',
            'sname_m' => 'Sname M',
            'date_m' => 'Date M',
            'clas_id_st_m' => 'Clas Id St M',
            'clas_id_la_m' => 'Clas Id La M',
            'club_m' => 'Club M',
            'city_m' => 'City M',
            'country_m' => 'Country M',
            'name_w' => 'Name W',
            'sname_w' => 'Sname W',
            'club_w' => 'Club W',
            'date_w' => 'Date W',
            'city_w' => 'City W',
            'country_w' => 'Country W',
            'clas_id_st_w' => 'Clas Id St W',
            'clas_id_la_w' => 'Clas Id La W',
            'trener1_n_st' => 'Trener1 N St',
            'trener1_sn_st' => 'Trener1 Sn St',
            'trener2_n_st' => 'Trener2 N St',
            'trener2_sn_st' => 'Trener2 Sn St',
            'trener3_n_st' => 'Trener3 N St',
            'trener3_sn_st' => 'Trener3 Sn St',
            'trener1_n_la' => 'Trener1 N La',
            'trener1_sn_la' => 'Trener1 Sn La',
            'trener2_n_la' => 'Trener2 N La',
            'trener2_sn_la' => 'Trener2 Sn La',
            'trener3_n_la' => 'Trener3 N La',
            'trener3_sn_la' => 'Trener3 Sn La',
            'user' => 'User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasIdStM()
    {
        return $this->hasOne(Clas::className(), ['id' => 'clas_id_st_m'])->inverseOf('couples');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasIdLaM()
    {
        return $this->hasOne(Clas::className(), ['id' => 'clas_id_la_m'])->inverseOf('couples0');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasIdStW()
    {
        return $this->hasOne(Clas::className(), ['id' => 'clas_id_st_w'])->inverseOf('couples1');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClasIdLaW()
    {
        return $this->hasOne(Clas::className(), ['id' => 'clas_id_la_w'])->inverseOf('couples2');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser0()
    {
        return $this->hasOne(Users::className(), ['id' => 'user'])->inverseOf('couples');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegistrations()
    {
        return $this->hasMany(Registration::className(), ['couple_id' => 'id'])->inverseOf('couple');
    }
}
