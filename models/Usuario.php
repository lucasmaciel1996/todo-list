<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $code_usuario
 * @property string $nome
 * @property string $email
 * @property string $telefone
 * @property string $senha
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome','email'], 'required'],
            ['email','email'],
            [['nome', 'email'], 'string', 'max' => 30],
            [['telefone'], 'string', 'max' => 12],
            [['senha'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'code_usuario' => 'Code Usuario',
            'nome' => 'Nome',
            'email' => 'Email',
            'telefone' => 'Telefone',
            'senha' => 'Senha',
        ];
    }
}
