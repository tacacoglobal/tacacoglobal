<?php

class homeController extends TMC_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->show('home');
    }

}

?>