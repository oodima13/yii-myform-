<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php if ($name) { ?><p>You entered name <b><?=$name?></b> and email <b><?=$email?></b>.</p><?php } ?>
<?php $f = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>
  <?=$f->field($form, 'name')?>
  <?=$f->field($form, 'email')?>
  <?=$f->field($form, 'file')->fileInput() ?>
  <?= Html::submitButton('send'); ?>
<?php ActiveForm::end(); ?>