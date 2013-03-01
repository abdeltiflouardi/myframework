<?php

/**
 * @author ouardisoft <ouardisoft@gmail.com>
 */
class Config
{

    /**
     *
     * @var string database name
     */
    private $dbName = DB_NAME;

    /**
     *
     * @var string database user password
     */
    private $dbPassword = DB_PASSWORD;

    /**
     *
     * @var string database user name
     */
    private $dbUsername = DB_USERNAME;

    /**
     *
     * @var string database server address
     */
    private $dbServer = DB_SERVER;

    /**
     *
     * @var int 
     */
    private $perPage = PAGER_PER_PAGE;

    /**
     *
     * @var string
     */
    private $pageName = PAGE_NAME;

    /**
     *
     * @var Config
     */
    private static $instance;

    /**
     * 
     * @return Config
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function getDbName()
    {
        return $this->dbName;
    }

    public function setDbName($dbName)
    {
        $this->dbName = $dbName;
    }

    public function getDbPassword()
    {
        return $this->dbPassword;
    }

    public function setDbPassword($dbPassword)
    {
        $this->dbPassword = $dbPassword;
    }

    public function getDbUsername()
    {
        return $this->dbUsername;
    }

    public function setDbUsername($dbUsername)
    {
        $this->dbUsername = $dbUsername;
    }

    public function getDbServer()
    {
        return $this->dbServer;
    }

    public function setDbServer($dbServer)
    {
        $this->dbServer = $dbServer;
    }

    public function getPerPage()
    {
        return $this->perPage;
    }

    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
    }

    public function getPageName()
    {
        return $this->pageName;
    }

    public function setPageName($pageName)
    {
        $this->pageName = $pageName;
    }

}