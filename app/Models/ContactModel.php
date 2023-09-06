<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends \TAO\ORM\Model
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
                'style' => 'width: 90%',
            ),
            'question' => array(
                'type' => 'text',
                'label' => 'Вопрос',
                'in_form' => true,
                'in_list' => true,
                'style' => 'width: 90%; height: 200px;',
            ),
        );
    }
}

