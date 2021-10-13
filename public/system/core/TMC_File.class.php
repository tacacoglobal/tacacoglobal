<?php

class TMC_File {

    public static function removeFile($fileName) {
        if (!file_exists($fileName)) {
            return FALSE;
        }
        return unlink($fileName);
    }

    public static function createDatabase($file_name, $database = array(), $path = NULL) {
        /* convert array to json string */
        $json_str = json_encode($database);

        /* set path */
        $path = (empty($path)) ? getcwd() : $path;

        /* file name */
        $file_name = $path . '/' . $file_name;

        /* put content into file */
        if (!file_exists($file_name)) {
            file_put_contents($file_name, $json_str);
        }
    }

}

?>