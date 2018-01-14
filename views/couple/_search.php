<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CoupleSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="couple-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_m') ?>

    <?= $form->field($model, 'sname_m') ?>

    <?= $form->field($model, 'date_m') ?>

    <?= $form->field($model, 'clas_id_st_m') ?>

    <?php // echo $form->field($model, 'clas_id_la_m') ?>

    <?php // echo $form->field($model, 'club_m') ?>

    <?php // echo $form->field($model, 'city_m') ?>

    <?php // echo $form->field($model, 'country_m') ?>

    <?php // echo $form->field($model, 'name_w') ?>

    <?php // echo $form->field($model, 'sname_w') ?>

    <?php // echo $form->field($model, 'club_w') ?>

    <?php // echo $form->field($model, 'date_w') ?>

    <?php // echo $form->field($model, 'city_w') ?>

    <?php // echo $form->field($model, 'country_w') ?>

    <?php // echo $form->field($model, 'clas_id_st_w') ?>

    <?php // echo $form->field($model, 'clas_id_la_w') ?>

    <?php // echo $form->field($model, 'trener1_n_st') ?>

    <?php // echo $form->field($model, 'trener1_sn_st') ?>

    <?php // echo $form->field($model, 'trener2_n_st') ?>

    <?php // echo $form->field($model, 'trener2_sn_st') ?>

    <?php // echo $form->field($model, 'trener3_n_st') ?>

    <?php // echo $form->field($model, 'trener3_sn_st') ?>

    <?php // echo $form->field($model, 'trener1_n_la') ?>

    <?php // echo $form->field($model, 'trener1_sn_la') ?>

    <?php // echo $form->field($model, 'trener2_n_la') ?>

    <?php // echo $form->field($model, 'trener2_sn_la') ?>

    <?php // echo $form->field($model, 'trener3_n_la') ?>

    <?php // echo $form->field($model, 'trener3_sn_la') ?>

    <?php // echo $form->field($model, 'user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
