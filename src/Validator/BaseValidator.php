<?php

namespace App\Validator;

use Symfony\Component\Validator\ConstraintViolationListInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class BaseValidation
 * @package Core\Services\Validator
 */
class BaseValidator
{
    /**
     * @var ValidatorInterface
     */
    private ValidatorInterface $validator;

    /**
     * OrderGridValidator constructor.
     * @param ValidatorInterface $validator
     */
    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }

    /**
     * Kuralların tanımlanacağı yer child class tarafından mutlaka ezilmeli
     * @return Assert\Collection
     */
    public function rules(): Assert\Collection
    {
        return new Assert\Collection([]);
    }

    /**
     * @param $input
     * @return ConstraintViolationListInterface
     */
    public function validate($input): ConstraintViolationListInterface
    {
        $input = $this->preparationInput($input);
        return $this->getValidator()->validate($input, $this->rules());
    }

    /**
     * Request içerisinde bulunmayan alanlarında kontrolünu sağlamak için yapıldı
     * özellikle query içeren isteklerde başka alanlarda gelebilir (data grid)
     * @param $input
     * @return mixed
     */
    public function preparationInput($input): mixed
    {
        foreach ($this->rules()->fields as $key => $rule) {
            if (!array_key_exists($key, $input)) {
                $input[$key] = null;
            }
        }
        foreach ($input as $key => $value) {
            if (!array_key_exists($key,$this->rules()->fields)){
                unset($input[$key]);
            }
        }
        return $input;
    }

    /**
     * @return ValidatorInterface
     */
    public function getValidator(): ValidatorInterface
    {
        return $this->validator;
    }


}