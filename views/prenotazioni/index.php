<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PrenotazioniSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prenotazionis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prenotazioni-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Delete Prenotazioni', ['deleteAll'], ['class' => 'btn btn-warn']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pren_id',
            'id_squadra',
            'tempo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
