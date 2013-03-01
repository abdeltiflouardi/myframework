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
        if (isset($_GET[$name])) {
            return $_GET[$name];
        } elseif (isset($_POST[$name])) {
            return $_POST[$name];
        } elseif (isset($_COOKIE[$name])) {
            return $_COOKIE[$name];
        } elseif (isset($_ENV[$name])) {
            return $_ENV[$name];
        } elseif (isset($_SERVER[$name])) {
            return $_SERVER[$name];
        }

        return $default;
    }

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