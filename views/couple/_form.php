<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Couple */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="couple-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_m')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sname_m')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_m')->textInput() ?>

    <?= $form->field($model, 'clas_id_st_m')->textInput() ?>

    <?= $form->field($model, 'clas_id_la_m')->textInput() ?>

    <?= $form->field($model, 'club_m')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city_m')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_m')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_w')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sname_w')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'club_w')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_w')->textInput() ?>

    <?= $form->field($model, 'city_w')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'country_w')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clas_id_st_w')->textInput() ?>

    <?= $form->field($model, 'clas_id_la_w')->textInput() ?>

    <?= $form->field($model, 'trener1_n_st')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trener1_sn_st')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trener2_n_st')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trener2_sn_st')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trener3_n_st')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trener3_sn_st')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trener1_n_la')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trener1_sn_la')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trener2_n_la')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trener2_sn_la')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trener3_n_la')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trener3_sn_la')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
