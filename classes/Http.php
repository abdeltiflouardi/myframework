<?php

/**
 * @author ouardisoft <ouardisoft@gmail.com>
 */
class Http
{

    /**
     *
     * @var Http
     */
    private static $instance;

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

    /**
     * 
     * @param string $url
     */
    public function redirectTo($url = null)
    {
        header('location: ' . $url);

        exit;
    }

    /**
     * return bool
     */
    public function isPost()
    {
        return $this->get('REQUEST_METHOD') === 'POST';
    }

    /**
     * 
     * @param type $name
     * @param type $default
     */
    public function get($name, $default = null)
    {
        $values = $this->all();

        if (array_key_exists($name, $values)) {
            return $values[$name];
        }

        return $default;
    }

    /**
     * 
     * @return string[]
     */
    public function all()
    {
        return array_reverse(array_merge($_SERVER, $_SERVER, $_ENV, $_COOKIE, $_POST, $_GET));
    }

    /**
     * 
     * @param type $append
     * @param type $remove
     * @return string
     */
    public function getCurrentUrl($append = array(), $remove = array())
    {
        $baseURI  = $this->get('PHP_SELF');
        $querySTR = $this->get('QUERY_STRING');

        // Remove current per_page from query string
        $output = null;
        parse_str($querySTR, $output);

        foreach ($remove as $key) {
            unset($output[$key]);
        }

        $querySTR2 = http_build_query(array_merge($output, $append));

        if ($querySTR2) {
            $baseURI .= '?' . $querySTR2;
        }

        return $baseURI;
    }

}