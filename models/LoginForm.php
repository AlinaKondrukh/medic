<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property-read User|null $user
 *
 */
class LoginForm extends Model
{
    public $tel;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // username and password are both required
            [['tel', 'password'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'password' => 'Пароль',
            'tel' => 'Телефон',
            'rememberMe' => 'Запомнить меня',
        ];
    }

      /**
     * Logs in a user using the provided username and password.
     * @return bool whether the user is logged in successfully
     */
    public function vhod()
    {
        if ($this->validate()) {
            $user = $this->getUser();
            if ($user) {
                return Yii::$app->user->login($user, $this->rememberMe ? 3600*24*30 : 0);
            }
            
        }
        return false;
    }

    /**
     * Finds user by [[username]]
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::vhod($this->tel, $this->password);
        }

        return $this->_user;
    }
}
