<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StInciden */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="st-inciden-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hora_inc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fecha_inc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lugar_inc')->textInput() ?>

    <?= $form->field($model, 'nombre_inc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido_inc')->textInput() ?>

    <?= $form->field($model, 'departamento_inc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones_inc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status_inc')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
