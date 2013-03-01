<?php

/**
 * @author ouardisoft <ouardisoft@gmail.com>
 */
class Pager
{

    private $sql;

    /**
     * items per page
     * 
     * @var integer 
     */
    private $perPage;

    /**
     * current page
     * 
     * @var integer 
     */
    private $currPage;

    /**
     * count of items
     * 
     * @var type 
     */
    private $countItems;

    /**
     * Count of pages
     * 
     * @var type 
     */
    private $countPages;

    /**
     * Entity to paginate
     * 
     * @var 
     */
    private $model;

    /**
     *
     * @var PDOStatement
     */
    private $items;

    /**
     *
     * @var Pager
     */
    private static $instance;

    function __construct()
    {
        $this->currPage = Http::getInstance()->get(Config::getInstance()->getPageName(), 1);
        $this->perPage  = Config::getInstance()->getPerPage();
    }

    /**
     * 
     * @return Pager
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    public function setSQL($sql)
    {
        $this->sql = $sql;
    }

    public function getPagerSQL()
    {
        // Append sql calc found rows
        $pagerSql = str_replace('SELECT ', 'SELECT SQL_CALC_FOUND_ROWS ', $this->sql);

        // append limit
        $offset = ($this->currPage - 1) * $this->perPage;

        $pagerSqlWithLimit = sprintf('%s LIMIT %d, %d', $pagerSql, $offset, $this->perPage);

        return $pagerSqlWithLimit;
    }

    public function setModel($model)
    {
        $this->model = $model;

        $this->setSQL($model->getSql());

        $this->items = array();
    }

    public function getItems()
    {
        $this->items      = DB::getInstance()->query($this->getPagerSql());
        $this->countItems = DB::getInstance()->query('SELECT FOUND_ROWS() as count')->fetchColumn(0);

        $this->countPages = ceil($this->countItems / $this->perPage);

        return $this->items;
    }

    public function getPerPage()
    {
        return $this->perPage;
    }

    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;
    }

    public function getCurrPage()
    {
        return $this->currPage;
    }

    public function setCurrPage($currPage)
    {
        $this->currPage = $currPage;
    }

    public function getCountItems()
    {
        return $this->countItems;
    }

    public function setCountItems(type $countItems)
    {
        $this->countItems = $countItems;
    }

    public function getCountPages()
    {
        return $this->countPages;
    }

    public function setCountPages(type $countPages)
    {
        $this->countPages = $countPages;
    }

    public function isCurrPage($currPage)
    {
        return $currPage == $this->getCurrPage();
    }

    public function isFirstPage()
    {
        return $this->getCurrPage() == 1;
    }

    public function isLastPage()
    {
        return $this->getCurrPage() == $this->getCountPages();
    }
}