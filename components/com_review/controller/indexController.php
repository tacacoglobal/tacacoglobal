<?php

class indexController extends TMC_Controller {

    function __construct() {
        parent::__construct();
        $this->getModel('review');
    }

    public function index() {
        $this->view->show('view');
    }

    public function serviceByCustommer() {
        $this->view->show('list');
    }

}

?>