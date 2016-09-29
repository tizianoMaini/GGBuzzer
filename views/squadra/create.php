<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Squadra */

$this->title = 'Create Squadra';
$this->params['breadcrumbs'][] = ['label' => 'Squadras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="squadra-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
