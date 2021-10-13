<?php

class indexController extends TMC_Controller {

    function __construct() {
        parent::__construct();
        $this->getModel('service');
    }

    //danh sách dịch vụ
    public function index() {
        $this->view->data['list'] = $this->mc->getList();
        $this->view->show('list');
    }
    
    //xem chi tiết dịch vụ
    public function view() {
        $this->view->data['item'] = $this->mc->getItem();
        $this->view->show('view');
    }
    
    //bảng giá
    public function price() {
        $this->view->show('price');
    }
    
    //dịch vụ thiết kế
    public function design() {
        $this->view->show('design');
    }
    
    //đánh giá của khách hàng
    public function review() {
        $this->view->show('review');
    }
}

?>