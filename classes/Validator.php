<?php

class Validator
{

    /**
     *
     * @var Validator
     */
    private static $instance;

    /**
     * 
     * @return Validator
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function checkValue($value, array $constraints = array())
    {
        if (empty($constraints)) {
            return true;
        }

        foreach ($constraints as $constraint => $details) {
            if (is_numeric($constraint)) {
                $constraint = $details;
                $details    = null;
            }

            if (!$value && $constraint != 'NotBlank') {
                continue;
            }

            $isValid = call_user_func_array(array($this, 'check' . $constraint), array($value, $details));

            if (!$isValid) {
                return $isValid;
            }
        }

        return true;
    }

    public function checkNotBlank($value)
    {
        return (bool)$value;
    }

    public function checkLength($value, $details)
    {
        return strlen($value) < (int) $details;
    }

    public function checkAlpha($value)
    {
        return preg_match('![a-z]!i', $value);
    }

    public function checkDateTime($value)
    {
        return preg_match('!([0-9]{1,2}/([0-9]{1,2})/([0-9]{4}))!', $value);
    }

    public function checkAlphaNumeric($value)
    {
        return preg_match('![a-z0-9]!i', $value);
    }

    public function checkNumeric($value)
    {
        return preg_match('![0-9]!i', $value);
    }

    public function checkEmail($value)
    {
        return (bool)filter_var($value, FILTER_VALIDATE_EMAIL);
    }

}