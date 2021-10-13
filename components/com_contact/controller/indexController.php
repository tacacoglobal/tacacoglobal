<?php

class indexController extends TMC_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->view->show('form');
    }

    public function pContact() {
//        /* get data */
//        $data = TMC_DataProcess::getData('contact', $_POST);
//
//        /* put into database */
//        if (!empty($data)) {
//            $this->mc->insert($data);
//        }
//
//        /* release memory */
//        unset($data, $_POST);

        /* redirect */
        $this->view->show('success');
    }
}

?>