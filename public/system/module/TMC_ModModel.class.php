<?php

class TMC_ModModel {

    public $module;
    public $db;
    private static $instance;

    public function __construct() {
        /* get database object */
        $this->db = $GLOBALS['db'];
    }

    public static function getInstance() {
        /* check empty */
        if (!self::$instance) {
            self::$instance = new TMC_ModModel();
        }

        /* return an object */
        return self::$instance;
    }

    public function get($model_name) {
        /* set path */
        $file = __SITE__PATH__ . '/modules/mod_' . $this->module . '/model/' . $model_name . "Model.php";

        /* check file model */
        if (!file_exists($file)) {
            die('does not exist ' . $file);
        }

        /* include  model */
        require_once $file;

        /* get class name */
        $class = $model_name . "Model";

        /* release memory */
        unset($file, $model_name);

        /* create new instance */
        return new $class();
    }

}

?>