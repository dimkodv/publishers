<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use app\models\PublishersForm;
use yii\helpers\Url;

/**
 * @var $formModel app\models\PublishersForm
 */
?>



<?php $form = ActiveForm::begin(['options' => ['id' => 'publishers-form'.$formName.'', 'class' => 'publishers-form']]); ?>

<?= $form->field($model, 'email', [
    'inputOptions'=>[
        'placeholder'=>'Your Email'
    ]
])->label(false)->input('email') ?>

<?= Html::submitButton('Sign Up', ['class' => 'btn']) ?>

<?php ActiveForm::end(); ?>
