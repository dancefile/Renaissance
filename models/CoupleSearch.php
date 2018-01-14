<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Couple;

/**
 * CoupleSearch represents the model behind the search form of `app\models\Couple`.
 */
class CoupleSearch extends Couple
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'clas_id_st_m', 'clas_id_la_m', 'clas_id_st_w', 'clas_id_la_w', 'user'], 'integer'],
            [['name_m', 'sname_m', 'date_m', 'club_m', 'city_m', 'country_m', 'name_w', 'sname_w', 'club_w', 'date_w', 'city_w', 'country_w', 'trener1_n_st', 'trener1_sn_st', 'trener2_n_st', 'trener2_sn_st', 'trener3_n_st', 'trener3_sn_st', 'trener1_n_la', 'trener1_sn_la', 'trener2_n_la', 'trener2_sn_la', 'trener3_n_la', 'trener3_sn_la'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Couple::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date_m' => $this->date_m,
            'clas_id_st_m' => $this->clas_id_st_m,
            'clas_id_la_m' => $this->clas_id_la_m,
            'date_w' => $this->date_w,
            'clas_id_st_w' => $this->clas_id_st_w,
            'clas_id_la_w' => $this->clas_id_la_w,
            'user' => $this->user,
        ]);

        $query->andFilterWhere(['like', 'name_m', $this->name_m])
            ->andFilterWhere(['like', 'sname_m', $this->sname_m])
            ->andFilterWhere(['like', 'club_m', $this->club_m])
            ->andFilterWhere(['like', 'city_m', $this->city_m])
            ->andFilterWhere(['like', 'country_m', $this->country_m])
            ->andFilterWhere(['like', 'name_w', $this->name_w])
            ->andFilterWhere(['like', 'sname_w', $this->sname_w])
            ->andFilterWhere(['like', 'club_w', $this->club_w])
            ->andFilterWhere(['like', 'city_w', $this->city_w])
            ->andFilterWhere(['like', 'country_w', $this->country_w])
            ->andFilterWhere(['like', 'trener1_n_st', $this->trener1_n_st])
            ->andFilterWhere(['like', 'trener1_sn_st', $this->trener1_sn_st])
            ->andFilterWhere(['like', 'trener2_n_st', $this->trener2_n_st])
            ->andFilterWhere(['like', 'trener2_sn_st', $this->trener2_sn_st])
            ->andFilterWhere(['like', 'trener3_n_st', $this->trener3_n_st])
            ->andFilterWhere(['like', 'trener3_sn_st', $this->trener3_sn_st])
            ->andFilterWhere(['like', 'trener1_n_la', $this->trener1_n_la])
            ->andFilterWhere(['like', 'trener1_sn_la', $this->trener1_sn_la])
            ->andFilterWhere(['like', 'trener2_n_la', $this->trener2_n_la])
            ->andFilterWhere(['like', 'trener2_sn_la', $this->trener2_sn_la])
            ->andFilterWhere(['like', 'trener3_n_la', $this->trener3_n_la])
            ->andFilterWhere(['like', 'trener3_sn_la', $this->trener3_sn_la]);

        return $dataProvider;
    }
}
