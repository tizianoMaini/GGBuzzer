<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Prenotazioni */

$this->title = 'Buzz';
?>
<div class="prenotazioni-create">

    <h1><?= Html::encode($model->id_squadra) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
