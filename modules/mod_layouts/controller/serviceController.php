<?php

class serviceController extends TMC_ModController {

    function __construct() {
        parent::__construct('layouts');
        $this->getModel('layout');
    }

    public function index() {
        $this->view->data['type'] = $this->mc->getServiceType();
        $this->view->show('service');
    }

}

?>