<?php
/**
 * Created by PhpStorm.
 * User: Levan Alpenidze
 * Date: 4/14/2017
 * Time: 12:03 PM
 */

namespace app\models;
use borales\extensions\phoneInput\PhoneInputBehavior;
use borales\extensions\phoneInput\PhoneInputValidator;
use yii\base\Model;

class FeedBack extends Model
{

    public $name;
    public $email;
    public $phone;
    public $subject;
    public $text;

    public function attributeLabels()
    {
        return [

            'name' => 'სახელი',
            'email' => 'E-mail',
            'subject' => 'შეტყობინების სათაური',
            'text' => 'შეტყობინების შინაარსი',

        ];
    }

    public function behaviors()
    {
        return [
            'phoneInput' => PhoneInputBehavior::className(),
        ];
    }

    public function rules()
    {
        return [
            [['phone'], 'string'],
            [['phone'], PhoneInputValidator::className()],
        ];
    }

}