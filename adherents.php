<?php

define('IS_AUTHENTICATED_MODE', true);

include_once 'config.php';

$http   = Http::getInstance();
$action = $http->get('action', 'list');

switch ($action) {
    case 'list':
        $pager     = Pager::getInstance();

        $adherentModel = new AdherentModel();

        $pager->setModel($adherentModel);

        include './views/_adherents/_list.php';
        break;
    case 'new':
        $adherentRequest = new AdherentRequest();

        $title = 'Nouveau adhérent';

        include './views/_adherents/_new.php';
        break;
    case 'create':
        if (!$http->isPost()) {
            $http->redirectTo($http->getCurrentUrl(array('action' => 'new')));
        }

        $adherentRequest = new AdherentRequest();
        $adherentRequest->checkData($http->get('input', array()));

        if (count($adherentRequest->getErrors()) == 0) {
            $adherentModel = new AdherentModel();

            $id = (int)$http->get('id');

            if ($id) {
                $adherentModel->update($id, $http->get('input', array()));

                $lastid = $id;
            } else {
                $lastid = $adherentModel->insert($http->get('input', array()));
            }

            $http->redirectTo($http->getCurrentUrl(array('action' => 'details', 'id' => $lastid)));
        }

        $title = 'Modifier Adhérent';

        include './views/_adherents/_new.php';
        break;
    case 'edit':
        $id = (int)$http->get('id');

        // Request to check form data on submit
        $adherentRequest = new AdherentRequest();

        // findOne
        $adherentModel = new AdherentModel();
        $adherent      = $adherentModel->findOne($id);

        $adherentRequest->fromDB($adherent);

        $title = 'Modifier Adhérent';

        include './views/_adherents/_new.php';
        break;
    case 'details':
        $id = $http->get('id');

        include './views/_adherents/_details.php';
        break;
}