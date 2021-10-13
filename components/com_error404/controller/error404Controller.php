<?php

class error404Controller extends TMC_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        /* show view */
        $this->view->show('view');
    }

}

?>