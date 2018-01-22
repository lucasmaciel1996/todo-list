<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $code_produto
 * @property string $descricao
 * @property int $valor
 * @property string $situacao
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao','valor'], 'required'],
            [['valor'], 'integer'],
            [['descricao'], 'string', 'max' => 25],
            [['situacao'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code_produto' => 'ID Produto',
            'descricao' => 'Descricao',
            'valor' => 'Valor',
            'situacao' => 'Situacao',
        ];
    }
}
