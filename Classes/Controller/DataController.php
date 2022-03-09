<?php

namespace RENOLIT\renolitAjax\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * AbstractController
 */
class DataController extends ActionController {

    public function showAction() {
        $this->view->assign('returnValues', '{"some": "value"}');
    }
}
