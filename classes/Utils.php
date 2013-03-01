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

}