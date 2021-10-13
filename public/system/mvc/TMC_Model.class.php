<?php

/*
 * use database to process data input and return result to controller
 */

class TMC_Model {

    public $db = NULL;
    public $com = NULL;
    private static $instance;

    protected function __construct() {
        /* get database object */
        $this->db = $GLOBALS['db'];
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new TMC_Model();
        }
        return self::$instance;
    }

    public function get($model_name) {
        /* set path */
        $file = __SITE__PATH__ . '/components/com_' . $this->component . '/model/' . $model_name . "Model.php";

        /* check file model */
        if (!file_exists($file)) {
            die('Does not exist ' . $file);
        }

        /* include  model */
        require_once $file;

        /* get class name */
        $class = $model_name . "Model";

        /* release memory */
        unset($model_name, $file);

        /* create instance */
        return new $class();
    }

}

?>