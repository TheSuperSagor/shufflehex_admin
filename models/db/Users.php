<?php

namespace app\models\db;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property string $id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property string $password
 * @property int $elite_points
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'username', 'email', 'password'], 'required'],
            [['elite_points'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name', 'username', 'email', 'password'], 'string', 'max' => 191],
            [['remember_token'], 'string', 'max' => 100],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'username' => 'Username',
            'email' => 'Email',
            'password' => 'Password',
            'elite_points' => 'Elite Points',
            'remember_token' => 'Remember Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
