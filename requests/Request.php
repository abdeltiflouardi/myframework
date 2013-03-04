<?php

class Request
{

    protected $validators = array();
    protected $errors = array();    

    public function checkData(array $data)
    {
        foreach ($data as $item => $value) {
            $constraint = array_key_exists($item, $this->validators) ? $this->validators[$item] : '';

            if (false == Validator::getInstance()->checkValue($value, $constraint))
            {
                $this->addError($item);
            }
        }
    }

    /**
     * @todo Messages
     * 
     * @param type $fields
     */
    public function addError($fields)
    {
        $this->errors[] = $fields;
    }

    public function hasError($fields)
    {
        return in_array($fields, $this->errors);
    }

    public function getValidators()
    {
        return $this->validators;
    }

    public function setValidators($validators)
    {
        $this->validators = $validators;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function setErrors($errors)
    {
        $this->errors = $errors;
    }

}