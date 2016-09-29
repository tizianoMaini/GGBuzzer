<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Prenotazioni */

$this->title = $model->pren_id;
$this->params['breadcrumbs'][] = ['label' => 'Prenotazionis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prenotazioni-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pren_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pren_id], [
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
            'pren_id',
            'id_squadra',
            'tempo',
        ],
    ]) ?>

</div>
