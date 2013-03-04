<?php

define('IS_AUTHENTICATED_MODE', true);

include 'config.php';

$action = Http::getInstance()->get('action', 'list');

switch ($action) {
    case 'list': include './views/_back.php';
}