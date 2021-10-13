<?php

class indexController extends TMC_Controller {

    function __construct() {
        parent::__construct();
        $this->getModel('chat');
    }

    public function index() {
        $this->view->show('form');
    }

}

?>