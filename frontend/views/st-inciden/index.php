<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StIncidenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'St Incidens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="st-inciden-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create St Inciden', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'hora_inc',
            'fecha_inc',
            'lugar_inc',
            'nombre_inc',
            // 'apellido_inc',
            // 'departamento_inc',
            // 'observaciones_inc:ntext',
            // 'status_inc:boolean',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
