<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StInciden */

$this->title = 'Create St Inciden';
$this->params['breadcrumbs'][] = ['label' => 'St Incidens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="st-inciden-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
