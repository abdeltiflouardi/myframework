<?php

/**
 * @author ouardisoft <ouardisoft@gmail.com>
 */
class Session
{

    const SESSION_STARTED     = true;
    const SESSION_NOT_STARTED = false;

    private $sessionState = self::SESSION_NOT_STARTED;

    /**
     *
     * @var Session
     */
    private static $instance;

    function __construct()
    {
        $this->startSession();
    }

    /**
     * 
     * @return Session
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        self::$instance->startSession();

        return self::$instance;
    }

    public function startSession()
    {
        if ($this->sessionState == self::SESSION_NOT_STARTED) {
            $this->sessionState = session_start();
        }

        return $this->sessionState;
    }

    public function set($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public function get($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        }

        return null;
    }

    public function __isset($name)
    {
        return isset($_SESSION[$name]);
    }

    public function __unset($name)
    {
        unset($_SESSION[$name]);
    }

    public function destroy()
    {
        if ($this->sessionState == self::SESSION_STARTED) {
            $this->sessionState = !session_destroy();
            unset($_SESSION);

            return !$this->sessionState;
        }

        return false;
    }

}
