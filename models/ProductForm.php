<?php
namespace app\models;

use Yii;
use yii\base\Model;

class ProductForm extends models
{

      public $description
      public $value
      public $status

      public function rules()
      {
        return[
            [['description','value'],'required'],
            ['description','value','status'],
        ];
      }
      <?php
$model = new EntryForm();
$model->name = 'Qiang';
$model->email = 'bad';
if ($model->validate()) {
    // Good!
} else {
    // Failure!
    // Use $model->getErrors()
}
}
