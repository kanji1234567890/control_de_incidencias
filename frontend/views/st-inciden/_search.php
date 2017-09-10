<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StIncidenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="st-inciden-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'hora_inc') ?>

    <?= $form->field($model, 'fecha_inc') ?>

    <?= $form->field($model, 'lugar_inc') ?>

    <?= $form->field($model, 'nombre_inc') ?>

    <?php // echo $form->field($model, 'apellido_inc') ?>

    <?php // echo $form->field($model, 'departamento_inc') ?>

    <?php // echo $form->field($model, 'observaciones_inc') ?>

    <?php // echo $form->field($model, 'status_inc')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
