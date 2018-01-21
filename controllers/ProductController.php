<?php
namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Produto;

class ProductController extends Controller
{
    public function actionIndex()
    {
      $query = Produto:: find();
      $pagination = new pagination([
        'defaultPageSize'=>5,
        'totalCount'=>$query->count(),
      ]);
      $produtos = $query->orderBy('descricao')
      ->offset($pagination->offset)
      ->limit($pagination->limit)
      ->all();

      return $this->render('index',[
        'produtos'=>$produtos,
        'pagination'=>$pagination,
      ]);

    }
}
