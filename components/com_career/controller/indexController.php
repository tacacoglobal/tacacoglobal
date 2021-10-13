<?php

class indexController extends TMC_Controller {

    function __construct() {
        parent::__construct();
        $this->getModel('career');
    }

    public function index() {
        $this->view->data['list'] = $this->mc->getList();
        $this->view->show('list');
    }

    public function read() {
        $this->view->data['one_item'] = $this->mc->getItem();
        $this->view->show('apply');
    }

    public function apply() {
        
    }

}

?>