<?php

class Request
{

    protected $data = array();
    protected $validators = array();
    protected $errors = array();    

    public function checkData(array $data)
    {
        $this->data = $data;

        foreach ($data as $item => $value) {
            $constraint = array_key_exists($item, $this->validators) ? $this->validators[$item] : null;

            if ($constraint && false == Validator::getInstance()->checkValue($value, $constraint))
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

    public function __call($name, $arguments = array())
    {
        $name = substr($name, 3);

        $default = null;

        if (!empty($arguments)) {
            list($default) = $arguments;
        }

        return array_key_exists($name, $this->data) && $this->data[$name] ? $this->data[$name] : $default;
    }
}