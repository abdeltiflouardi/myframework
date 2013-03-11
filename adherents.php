<?php

define('IS_AUTHENTICATED_MODE', true);

include_once 'config.php';

$http   = Http::getInstance();
$action = $http->get('action', 'list');

switch ($action) {
    case 'list':
        $pager     = Pager::getInstance();

        $adherents = new Adherents();

        $pager->setModel($adherents);

        include './views/_adherents/_list.php';
        break;
    case 'new':
        $adherentRequest = new Adherent();

        $title = 'Nouveau adhérent';

        include './views/_adherents/_new.php';
        break;
    case 'create':
        if (!$http->isPost()) {
            $http->redirectTo($http->getCurrentUrl(array('action' => 'new')));
        }

        $adherentRequest = new Adherent();
        $adherentRequest->checkData($http->get('input', array()));

        if (count($adherentRequest->getErrors()) == 0) {
            $adherents = new Adherents();
            $lastid = $adherents->insert($http->get('input', array()));

            $http->redirectTo($http->getCurrentUrl(array('action' => 'update', 'id' => $lastid)));
        }

        $title = 'Modifier Adhérent';

        include './views/_adherents/_new.php';
        break;
    case 'edit':
        $id = $http->get('id');

        $adherentRequest = new Adherent();

        $title = 'Modifier Adhérent';

        include './views/_adherents/_new.php';
        break;
    case 'details':
        $id = $http->get('id');

        include './views/_adherents/_details.php';
        break;
}