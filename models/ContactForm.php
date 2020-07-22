<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['message', 'text'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Ваше имя',
            'email' => 'E-mail',
            'subject' => 'Сообщение',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom($this->email)
                ->setSubject('Контакты клиента'. $this->name)
                ->setTextBody($this->message)
                ->send();

            return true;
        }
        return false;
    }
}
