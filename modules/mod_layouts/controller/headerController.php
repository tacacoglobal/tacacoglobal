<?php

class headerController extends TMC_ModController {

    function __construct() {
        parent::__construct('layouts');
    }

    public function index() {
        $this->view->show('header');
    }

}

?>