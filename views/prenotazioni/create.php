<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prenotazioni */

$this->title = 'Create Prenotazioni';
$this->params['breadcrumbs'][] = ['label' => 'Prenotazionis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="prenotazioni-create">

    <h1><?= Html::encode($model->id_squadra) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
