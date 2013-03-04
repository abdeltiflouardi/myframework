<?php

/**
 * @author ouardisoft <ouardisoft@gmail.com>
 */
class DB
{

    /**
     *
     * @var DB
     */
    private static $instance;

    /**
     *
     * @var PDO 
     */
    private $db;

    public function __construct()
    {
        $config = Config::getInstance();

        $dsn = sprintf('mysql:dbname=%s;host=%s', $config->getDbName(), $config->getDbServer());

        $this->db = new PDO($dsn, $config->getDbUsername(), $config->getDbPassword(), array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
    }

    /**
     * 
     * @return Http
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function findOne($table, array $where = array())
    {
        $sqlPart1 = 'SELECT * FROM ' . $table;

        $pieces = $this->parseWhere($where);

        if (!empty($pieces)) {
            $sqlPart1 .= ' WHERE ' . implode(' AND ', $pieces);
        }

        $result = $this->db->query($sqlPart1);

        return $result->fetch(PDO::FETCH_ASSOC);
    }

    public function parseWhere($where = array())
    {
        $pieces = array();

        foreach ($where as $key => $value) {
            $pieces[] = $key . '=\'' . $value . '\'';
        }

        return $pieces;
    }

    public function query($sql)
    {
        return $this->db->query($sql);
    }

    /**
     * 
     * @return PDO
     */
    public function getConnection()
    {
        return $this->db;
    }
}