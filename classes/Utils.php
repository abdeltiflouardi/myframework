<?php

/**
 * @author ouardisoft <ouardisoft@gmail.com>
 */
class Utils
{

    private static $instance;

    /**
     * 
     * @return Utils
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public static function camlizeKeys($data)
    {
        return array_combine(array_map(array('Utils', 'camlize'), array_keys($data)), array_values($data));
    }

    public static function camlize($word)
    {
        return preg_replace('/(^|_)([a-z])/e', 'strtoupper("\\2")', $word);
    }

    
}