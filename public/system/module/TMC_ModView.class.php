<?php

class TMC_ModView {

    public $data = array();
    public $module;
    private static $instance;

    public static function getInstance() {
        /* check empty */
        if (!self::$instance) {
            self::$instance = new TMC_ModView();
        }

        /* return an object */
        return self::$instance;
    }

    public function show($view_name) {
        /* path of view */
        $file = __SITE__PATH__ . '/modules/mod_' . $this->module . '/view/' . $view_name . '.php';

        /* check error */
        if (!file_exists($file)) {
            die('Does not exist ' . $file);
        }

        /* export array to vars */
        foreach ($this->data as $key => $value) {
            $$key = $value;
        }

        /* include view */
        require_once $file;

        /* release memory */
        unset($view_name, $path);
    }

}

?>