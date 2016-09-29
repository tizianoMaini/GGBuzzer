<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Prenotazioni */

$this->title = 'Update Prenotazioni: ' . $model->pren_id;
$this->params['breadcrumbs'][] = ['label' => 'Prenotazionis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pren_id, 'url' => ['view', 'id' => $model->pren_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prenotazioni-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
