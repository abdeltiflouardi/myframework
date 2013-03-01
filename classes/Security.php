<?php

/**
 * @author ouardisoft <ouardisoft@gmail.com>
 */
class Security
{

    /**
     *
     * @var Security
     */
    private static $instance;

    /**
     *
     * @var string[] 
     */
    private $user;

    /**
     * 
     * @return Security
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /**
     * 
     * @return bool
     */
    public function isConnected()
    {
        $this->user = unserialize(Session::getInstance()->get(SESSION_NAME));

        return $this->getUser() ? true : false;
    }

    /**
     * 
     * @return string[]
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * 
     */
    public function logout()
    {
        Session::getInstance()->destroy();
    }

    /**
     * 
     * @param type $table
     * @param array $username
     * @param array $password
     * @return \Security
     */
    public function doAuthentication($table, array $username, array $password)
    {
        $db = DB::getInstance();

        $user = $db->findOne($table, $username);

        list ($passField, $passValue) = each($password);

        if (isset($user[$passField]) && $passValue == $user[$passField]) {
            Session::getInstance()->set(SESSION_NAME, serialize($user));

            $this->user = $user;
        }

        $this->user = null;

        return $this;
    }

}