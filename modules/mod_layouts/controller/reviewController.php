<?php

class reviewController extends TMC_ModController {

    function __construct() {
        parent::__construct('layouts');
//        $this->getModel('content');
    }

    public function index() {
        $this->view->show('review');
    }

}

?>