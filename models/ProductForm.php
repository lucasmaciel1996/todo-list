<?php
namespace app\models;

use Yii;
use yii\base\Model;


class ProductForm extends Model
{

      public $description;
      public $value;
      public $status;

      public function rules()
      {
        return[
            [['description', 'value','status'],'required']
        ];
      }
}
