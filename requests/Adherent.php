<?php

class Adherent extends Request
{

    protected $validators = array(
        'Lastname'   => array('Length' => 32, 'Alpha', 'NotBlank'),
        'Firstname'  => array('Length' => 32, 'Alpha', 'NotBlank'),
        'Birthday'   => array('DateTime', 'NotBlank'),
        'CIN'        => array('Length' => 10, 'AlphaNumeric', 'NotBlank'),
        'Occupation' => array('Length' => 32, 'Alpha'),
        'Address'    => array('Length' => 32),
        'City'       => array('Length' => 32, 'Alpha'),
        'Phone'      => array('Length' => 32, 'Numeric'),
        'Email'      => array('Email', 'NotBlank')
    );

}