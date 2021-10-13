<?php

class TMC_Router {

    private $path;
    private $file;
    private $controller;
    private $action;

    public function setPath() {
        /* get request */
        $component = TMC_Request::get('com', 'get');

        /* set path for controller */
        $path = __SITE__PATH__ . '/components/com_' . $component . '/controller';

        /* exception */
        if (!is_dir($path)) {
            die('Invalid controller path: ' . $path);
        }

        /* result */
        $this->path = $path;

        /* release memory */
        unset($component, $path);
    }

    private function getRequest() {
        /* get controller */
        $cl_req = TMC_Request::get('cl', 'get');
        $this->controller = (!empty($cl_req)) ? $cl_req : 'index';

        /* get action */
        $act_req = TMC_Request::get('act', 'get');
        $this->action = (!empty($act_req)) ? $act_req : 'index';

        /* set path for controller */
        $this->file = $this->path . '/' . $this->controller . 'Controller.php';

        /* release memory */
        unset($cl_req, $act_req);
    }

    public function loader() {
        $this->setPath();
        $this->getRequest();

        /* exception */
        if (!file_exists($this->file)) {
            /* create request component */
            TMC_Request::set('com', 'error404', 'get');

            /* create request controller */
            TMC_Request::set('cl', 'error404', 'get');

            /* path of error controller */
            $this->path = __SITE__PATH__ . '/components/com_error404/controller';

            /* error controller file */
            $this->file = $this->path . '/error404Controller.php';

            /* error controller name */
            $this->controller = 'error404';
        }

        /* include controller */
        include $this->file;

        /* get class name */
        $class = $this->controller . 'Controller';

        /* create new instance */
        $controller = new $class();

        /* can call action from controller ? */
        $action = (is_callable(array($controller, $this->action)) == false) ? 'index' : $this->action;

        /* run action */
        $controller->$action();
    }

}

?>