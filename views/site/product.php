<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin();?>

    <?= $form->field($model,'description')?>
    <?= $form->field($model,'value') ?>
    <?= $form->field($model,'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit',['class'=>'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end(); ?>
