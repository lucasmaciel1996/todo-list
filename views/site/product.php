<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use  yii\widget\LinkPager;

?>
<?php $form = ActiveForm::begin();?>

<div class="row">
  <div class="col-lg-7">

      <?= $form->field($model, 'description')?>

      <?= $form->field($model,'status') ?>

      <div class="form-group">
          <?= Html::submitButton('Save',['class'=>'btn btn-primary']) ?>
      </div>
  </div>

    <div class="col-lg-5">
        <?= $form->field($model,'value') ?>
    </div>
    <div class="col-lg-12">

    </div>

</div>
<?php ActiveForm::end(); ?>
