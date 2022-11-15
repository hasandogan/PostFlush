<?php

namespace App\Message;

class CreateTagMessage
{
    private mixed $content;

    public function  __construct($content)
    {
        $this->content = $content;
    }

    /**
     * @return array
     */
    public function getContent()
    {
        return $this->content;
    }
}