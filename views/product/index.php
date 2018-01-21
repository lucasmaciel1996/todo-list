<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
 ?>
 <h1>Produts</h1>
 <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Descrição</th>
      <th scope="col">Valor</th>
      <th scope="col">Situação</th>
    </tr>
  </thead>
  <tbody>

      <?php foreach ($produtos as $produto):?>
         <tr>
            <th scope="row">  <?= Html::encode ("{$produto->code_produto} {$produto->descricao} ({$produto->valor},00)") ?>:
              <?= $produto->situacao ?>
            </th>
         </tr>
      <?php endforeach; ?>

 </tbody>
</table>

 <?= LinkPager::widget(['pagination' =>$pagination]) ?>
