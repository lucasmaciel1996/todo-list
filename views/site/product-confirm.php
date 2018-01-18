<?php
use\helpers\Html;
?>
<p>>You have entered the following information:</p>
<ul>
      <li><label>Description</label>: <?=Html::encode($model->description) ?></li>
      <li><label>Value</label>: <?=Html::encode($model->value) ?></li>
      <li><label>Status</label>: <?=Html::encode($model->status) ?></li>
</ul>
