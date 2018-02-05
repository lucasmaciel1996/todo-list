<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produto".
 *
 * @property int $code_produto
 * @property string $descricao
 * @property int $valor
 * @property int $id_situ
 *
 * @property Situacao $situ
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
            [['descricao'], 'required'],
            [['valor', 'id_situ'], 'integer'],
            [['descricao'], 'string', 'max' => 25],
            [['id_situ'], 'exist', 'skipOnError' => true, 'targetClass' => Situacao::className(), 'targetAttribute' => ['id_situ' => 'id_situacao']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code_produto' => 'Code Produto',
            'descricao' => 'Descricao',
            'valor' => 'Valor',
            'id_situ' => 'Id Situ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSitu()
    {
        return $this->hasOne(Situacao::className(), ['id_situacao' => 'id_situ']);
    }
}
