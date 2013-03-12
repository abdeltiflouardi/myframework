<?php

class AdherentRequest extends Request
{

    protected $validators = array(
        'Lastname'   => array('Length' => 32, 'Alpha', 'NotBlank'),
        'Firstname'  => array('Length' => 32, 'Alpha', 'NotBlank'),
        'Birthday'   => array('DateTime', 'NotBlank'),
        'Cin'        => array('Length' => 10, 'AlphaNumeric', 'NotBlank'),
        'Occupation' => array('Length' => 32, 'Alpha'),
        'Address'    => array('Length' => 32),
        'City'       => array('Length' => 32, 'Alpha'),
        'Phone'      => array('Length' => 32, 'Numeric'),
        'Email'      => array('Email', 'NotBlank')
    );

    public function fromDB($data)
    {
        $this->data = Utils::camlizeKeys($data);

        if (array_key_exists('Birthday', $this->data) && $this->data['Birthday']) {
            $datetime = DateTime::createFromFormat('Y-m-d', $this->data['Birthday']);

            $this->data['Birthday'] = $datetime->format('d/m/Y');            
        }
    }

}