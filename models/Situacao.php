<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "situacao".
 *
 * @property int $id_situacao
 * @property string $descricao
 *
 * @property Produto[] $produtos
 */
class Situacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'situacao';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_situacao' => 'Id Situacao',
            'descricao' => 'Descricao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produto::className(), ['id_situ' => 'id_situacao']);
    }
}
