<?php

abstract class TMC_ModController {

    protected $view;
    protected $model;
    protected $paging;
    protected $mc;

    protected function __construct($mod_name) {
        /* view object */
        $this->view = TMC_ModView::getInstance();

        /* model object */
        $this->model = TMC_ModModel::getInstance();

        /* paging object */
        $this->paging = TMC_Paging::getInstance();

        /* set module name for view */
        $this->view->module = $mod_name;

        /* set module name for model */
        $this->model->module = $mod_name;

        /* release memory */
        unset($mod_name);
    }
    
    protected function getModel($model_name){
        $this->mc = $this->model->get($model_name);
    }

    protected function redirect($path = 'index.php') {
        echo '<script>window.location="' . $path . '"</script>';
    }

    abstract function index();
}

?>