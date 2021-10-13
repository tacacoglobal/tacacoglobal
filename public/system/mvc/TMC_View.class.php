<?php

class TMC_View {

    public $data = array();
    public $component;
    public $paging;
    private static $instance;

    public static function getInstance() {
        /* check empty */
        if (!self::$instance) {
            self::$instance = new TMC_View();
        }

        /* return an object */
        return self::$instance;
    }

    public function show($view_name) {
        /* get controller name */
        $cl_req = TMC_Request::get('cl', 'get');

        /* controller */
        $controller = (!empty($cl_req)) ? $cl_req : 'index';

        /* view path */
        $file = __SITE__PATH__ . '/components/com_' . $this->component . '/view/' . $controller . '/' . $view_name . '.php';

        /* exception */
        if (!file_exists($file)) {
            die('Does not exist ' . $file);
        }

        /* export array to vars */
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }

        /* release memory */
        unset($view_name, $cl_req, $controller);

        /* include view */
        require_once $file;
    }

}

?>