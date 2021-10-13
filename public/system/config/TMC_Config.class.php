<?php

class TMC_Config {

    public static function dbConfig($db_type = 'ff') {
        /* database instance var */
        $db_instance = NULL;

        /* check database type */
        switch ($db_type) {
            case 'ff':
                $db_instance = TMC_FlatFile::getInstance();
                break;
//            case 'xml':
//                $db_instance = TMC_Xml::getInstance();
//                break;
//            case 'mysqli':
//                $db_instance = TMC_FlatFile::getInstance();
//                break;
//            case 'pdo':
//                $db_instance = TMC_Pdo::getInstance();
//                break;
        }

        /* release memory */
        unset($db_type);

        /* return an object */
        return $db_instance;
    }

    public static function loadLib($library = array(), $path = NULL, $prefix = 'TMC_') {
        /* check empty */
        if (!empty($library)) {
            /* number of library */
            $number = count($library);

            if (!empty($path)) {
                $path = $path . '/';
            }

            /* include lib */
            for ($i = 0; $i < $number; $i++) {
                if (!file_exists($path . $prefix . $library[$i] . '.class.php')) {
                    continue;
                }
                require_once $path . $prefix . $library[$i] . '.class.php';
            }

            /* release memory */
            unset($library, $path, $number, $prefix);
        }
    }

}

?>