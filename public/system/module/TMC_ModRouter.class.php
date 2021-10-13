<?php

class TMC_ModRouter {

    private $path;
    private $file;
    private $controller;
    private $action;

    public function loader($mod_name, $controller = NULL, $action = NULL) {
        /* set path for module */
        $path = __SITE__PATH__ . '/modules/mod_' . $mod_name . '/controller';

        /* check path */
        if (is_dir($path) == false) {
            die('Invalid controller path: `' . $path . '`');
        }

        /* result */
        $this->path = $path;


        /* controller */
        $this->controller = (!empty($controller)) ? $controller : 'index';

        /* action */
        $this->action = (!empty($action)) ? $action : 'index';

        /* current controller */
        $this->file = $this->path . '/' . $controller . 'Controller.php';

        /* check error */
        if (is_readable($this->file) == false) {
            /* error module controller */
            $this->path = __SITE__PATH__ . '/modules/mod_error404/controller';

            /* error module controller file */
            $this->file = $this->path . '/error404Controller.php';

            /* error module controller name */
            $this->controller = 'error404';
        }

        /* include controller */
        require_once $this->file;

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