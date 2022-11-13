<?php

namespace App\Validator\Message;

use App\Constraint\MessageExists;
use App\Validator\BaseValidator;
use Symfony\Component\Validator\Constraints as Assert;

class PostValidator extends BaseValidator
{
    /**
     * @return Assert\Collection
     */
    // TODO : custom validate eklenecek son mesaj süresine bakılacak.
    public function rules(): Assert\Collection
    {
        return new Assert\Collection([
            'message' => [
                new Assert\NotBlank([
                    'message' => 'Mesaj boş bırakılamaz'
                ]),
                new Assert\Length([
                    'max' => '80',
                    'maxMessage' => 'Mesaj uzunluğu 80 karakterden fazla olamaz'
                ]),
                new MessageExists(['message' => 'Yeni mesaj atmak için 3 sn beklemelisiniz.']),
            ],
            'username' => [
                new Assert\NotBlank([
                    'message' => 'Kullanıcı Adı boş bırakılamaz'
                ]),
                new Assert\Length([
                    'max' => '30',
                    'maxMessage' => 'Kullanıcı Adı uzunluğu 25 karakterden fazla olamaz'
                ])
            ]
        ]);
    }
}