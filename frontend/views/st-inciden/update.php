<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StInciden */

$this->title = 'Update St Inciden: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'St Incidens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="st-inciden-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
