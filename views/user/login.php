<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Вход';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Введите имя пользователя</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'user_name')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'passw')->passwordInput() ?>

    <div class="form-group">
            <div class=" col-lg-offset-1 col-lg-12">
                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>

            <div class=" col-lg-offset-1 col-lg-12" style="padding-top: 10px">
                <?= Html::submitButton('Регистрация', ['class' =>  'btn btn-default', 'name' => 'reg-button']) ?>
            </div>

        </div>

    <?php ActiveForm::end(); ?>


</div>
