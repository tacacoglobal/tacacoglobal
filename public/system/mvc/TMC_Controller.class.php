<?php

/*
 * use model to process data input from user and return view
 */

abstract class TMC_Controller {

    protected $view;
    protected $model;
    protected $object;
    protected $mc;

    abstract function index();

    public function __construct() {
        /* view object */
        $this->view = TMC_View::getInstance();

        /* model object */
        $this->model = TMC_Model::getInstance();

        /* paging object */
        $this->view->paging = TMC_Paging::getInstance();

        /* create request with component name */
        $component = TMC_Request::get('com', 'GET');

        if (!empty($component)) {
            /* set current com for view */
            $this->view->component = $component;

            /* set current com for model */
            $this->model->component = $component;
        }
    }

    protected function getModel($model_name) {
        $this->mc = $this->model->get($model_name);
    }

    protected function redirect($path = 'index.php') {
        echo '<script>window.location="' . $path . '"</script>';
    }

    protected function test($data = array()) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

}

?>