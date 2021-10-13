<?php

/* session */
session_start();
/* time stamp */
date_default_timezone_set('GMT');
/* database path */
define('database', 'tac_database');
define('image', 'public/image');
/* site path */
$site_path = realpath(dirname(__FILE__));
define('__SITE__PATH__', $site_path);
include './config.php';

//router
$mod_router = $GLOBALS['mod_router'];

//default component
if (!isset($_GET['com'])) {
    $_GET['com'] = 'home';
    $_GET['cl'] = 'home';
}

//load component
$com_router->loader();
?>