<?php

/* real root path */
$path = 'public';
require_once $path . '/system/config/TMC_Config.class.php';

/* connection */
$database = array('FlatFile', 'Limit');

/* core */
$core = array('Array', 'Datetime', 'File', 'Directory', 'String', 'Unility');

/* helper */
$helper = array('Form', 'Paging', 'Upload', 'Paging2');

/* module */
$mods = array('ModController', 'ModModel', 'ModView', 'ModRouter');

/* dispatcher */
$dispatcher = array('Meta', 'Object', 'Registry', 'Request');

/* mvc */
$mvc = array('Controller', 'DataProcess', 'Router', 'Model', 'View');

/* load database library */
TMC_Config::loadLib($database, $path . '/system/database');

/* load core library */
TMC_Config::loadLib($core, $path . '/system/core');

/* load helper library */
TMC_Config::loadLib($helper, $path . '/system/helper');

/* load module library */
TMC_Config::loadLib($mods, $path . '/system/module');

/* load mvc library */
TMC_Config::loadLib($mvc, $path . '/system/mvc');

/* load dispatcher library */
TMC_Config::loadLib($dispatcher, $path . '/system/dispatcher');


//autoload classes
spl_autoload_register(function($class_name) {
    $file = 'public/database/classes/' . $class_name . '.class.php';

    if (file_exists($file) == false) {
        return false;
    }
    include ($file);
});

/* create new database object */
$db = TMC_Config::dbConfig();

/* create new upload object */
$upl = TMC_Upload::getInstance();

/* create new mvc router object */
$com_router = new TMC_Router();

/* create new mod router object */
$mod_router = new TMC_ModRouter();
?>