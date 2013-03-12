<?php

// User vars
define('LOGIN_PAGE', 'signin.php');
define('DEFAULT_PAGE', 'back.php');
define('PAGER_PER_PAGE', 10);
define('PAGE_NAME', 'page');

// Security vars
define('SESSION_NAME', 'sname');

// Database vars
define('DB_NAME', 'clubkastalani');
define('DB_PASSWORD', 'yourpasswd');
define('DB_USERNAME', 'root');
define('DB_SERVER', 'localhost');

// System vars
define('DS', DIRECTORY_SEPARATOR);
define('PS', PATH_SEPARATOR);

include_once 'classes/Config.php';
include_once 'classes/Utils.php';
include_once 'classes/Http.php';
include_once 'classes/Security.php';
include_once 'classes/Session.php';
include_once 'classes/DB.php';
include_once 'classes/Pager.php';
include_once 'classes/Validator.php';
include_once 'models/AdherentModel.php';
include_once 'requests/Request.php';
include_once 'requests/AdherentRequest.php';


// Test if user is connected
if (defined('IS_AUTHENTICATED_MODE') && IS_AUTHENTICATED_MODE == true) {

    if (!Security::getInstance()->isConnected()) {
        Http::getInstance()->redirectTo(LOGIN_PAGE);
    }
}