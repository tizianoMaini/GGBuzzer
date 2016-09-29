<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Prenotazioni */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prenotazioni-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'id_squadra')->hiddenInput() ?>

    <?= $form->field($model, 'tempo')->hiddenInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Buzz' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
