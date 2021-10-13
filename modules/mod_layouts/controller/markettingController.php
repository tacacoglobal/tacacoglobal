<?php

class markettingController extends TMC_ModController {

    function __construct() {
        parent::__construct('layouts');
    }

    public function index() {
        /* show view */
        $this->view->show('marketting');
    }

}

?>