<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\helpers\VarDumper;

class SignupForm extends Model
{
    public $username;
    public $password;
    public $password_confirmation;

    public function rules()
    {
        return [
            [['username', 'password', 'password_confirmation'], 'required'],
            [['username', 'password', 'password_confirmation'], 'string', 'min' => 4, 'max' => '16'],
            ['password_confirmation', 'compare', 'compareAttribute' => 'password']
        ];
    }

    public function signup()
    {
        $user = new User();
        $user->username = $this->username;
        $user->password = \Yii::$app->security->generatePasswordHash($this->password);
        $user->access_token = \Yii::$app->security->generateRandomString();
        $user->auth_key = \Yii::$app->security->generateRandomString();

        if ($user->save()) {
            return true;
            //show message to user as alertbox
        }
        //TODO  still breaks app if duplicate username error recieved from database
        \Yii::error("User was not saved " . VarDumper::dumpAsString($user->errors));
        return false;
    }
}
