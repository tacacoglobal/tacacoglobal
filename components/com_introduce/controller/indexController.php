<?php

class indexController extends TMC_Controller {

    function __construct() {
        parent::__construct();
        $this->getModel('introduce');
    }

    public function index() {
        $this->view->data['list']=$this->model->get('staff')->getLimit();
        $this->view->show('about');
    }

    public function staff() {
        $this->view->data['list']=$this->model->get('staff')->getList();
        $this->view->show('staff');
    }
    
    public function term(){
        $this->view->show('term');
    }
    
    public function privacy(){
        $this->view->show('privacy');
    }
    
    public function question(){
        $this->view->show('question');
    }

}

?>