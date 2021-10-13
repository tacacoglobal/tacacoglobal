<?php

class indexController extends TMC_Controller {

    function __construct() {
        parent::__construct();
        $this->getModel('login');
    }

    public function index() {
        $this->view->show('login');
    }
    
    public function pLogin() {
        
    }
    
    public function fReset() {
        $this->view->show('reset');
    }
    
    public function pReset() {
        
    }

}

?>