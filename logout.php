<?php

define('IS_AUTHENTICATED_MODE', false);

include 'config.php';

Security::getInstance()->doLogout();

Http::getInstance()->redirectTo(DEFAULT_PAGE);