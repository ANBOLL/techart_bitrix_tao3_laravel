<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use TAO\ORM\Abstracts\FormMessageModel;

class ContactModel extends FormMessageModel
{
    public $table = 'contacts';
    public $typeTitle = 'Контакты';

    public function fields()
    {
        return array(
            'name' => array(
                'type' => 'string',
                'label' => 'Имя',
                'in_form' => true,
                'in_list' => true,
                'class' => 'b-input',
                'placeholder' => 'Андрей',
            ),
            'question' => array(
                'type' => 'text',
                'label' => 'Вопрос',
                'in_form' => true,
                'in_list' => true,
                'class' => 'b-textarea',
                'placeholder' => 'Почему лето закончилось?',
            ),
        );
    }
    protected function getNotifyList()
    {
        return ['boldyrev@techart.ru' => 'boldyrev@techart.ru'];
    }
}

