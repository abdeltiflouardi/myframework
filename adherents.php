<?php

define('IS_AUTHENTICATED_MODE', true);

include_once 'config.php';

$action = Http::getInstance()->get('action', 'list');

switch ($action) {
    case 'list':
        $pager     = Pager::getInstance();

        $adherents = new Adherents();

        $pager->setModel($adherents);

        include './views/_adherents_list.php';
        break;
}