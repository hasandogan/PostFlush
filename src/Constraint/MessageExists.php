<?php

namespace App\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Class MessageExists
 * @package App\Constraint
 */
class MessageExists extends Constraint
{

    public string $message = "";

    public function __construct($options = null)
    {
        parent::__construct($options);
    }
}