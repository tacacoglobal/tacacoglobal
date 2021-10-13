<?php

class blogController extends TMC_ModController {

    function __construct() {
        parent::__construct('layouts');
        $this->getModel('layout');
    }

    public function index() {
        $this->view->data['list'] = $this->mc->getBlogLastest();
        $this->view->show('blog');
    }

}

?>