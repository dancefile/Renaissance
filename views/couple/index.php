<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CoupleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Couples';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="couple-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Couple', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name_m',
            'sname_m',
            'date_m',
            'clas_id_st_m',
            //'clas_id_la_m',
            //'club_m',
            //'city_m',
            //'country_m',
            //'name_w',
            //'sname_w',
            //'club_w',
            //'date_w',
            //'city_w',
            //'country_w',
            //'clas_id_st_w',
            //'clas_id_la_w',
            //'trener1_n_st',
            //'trener1_sn_st',
            //'trener2_n_st',
            //'trener2_sn_st',
            //'trener3_n_st',
            //'trener3_sn_st',
            //'trener1_n_la',
            //'trener1_sn_la',
            //'trener2_n_la',
            //'trener2_sn_la',
            //'trener3_n_la',
            //'trener3_sn_la',
            //'user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
