<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Couple */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Couples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="couple-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_m',
            'sname_m',
            'date_m',
            'clas_id_st_m',
            'clas_id_la_m',
            'club_m',
            'city_m',
            'country_m',
            'name_w',
            'sname_w',
            'club_w',
            'date_w',
            'city_w',
            'country_w',
            'clas_id_st_w',
            'clas_id_la_w',
            'trener1_n_st',
            'trener1_sn_st',
            'trener2_n_st',
            'trener2_sn_st',
            'trener3_n_st',
            'trener3_sn_st',
            'trener1_n_la',
            'trener1_sn_la',
            'trener2_n_la',
            'trener2_sn_la',
            'trener3_n_la',
            'trener3_sn_la',
            'user',
        ],
    ]) ?>

</div>
