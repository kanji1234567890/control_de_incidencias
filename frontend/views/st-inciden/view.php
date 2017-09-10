<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StInciden */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'St Incidens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="st-inciden-view">

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
            'hora_inc',
            'fecha_inc',
            'lugar_inc',
            'nombre_inc',
            'apellido_inc',
            'departamento_inc',
            'observaciones_inc:ntext',
            'status_inc:boolean',
        ],
    ]) ?>

</div>
