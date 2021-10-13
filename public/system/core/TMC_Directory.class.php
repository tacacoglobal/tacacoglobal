<?php

class TMC_Directory {

    public static function changeDirectory($path) {
        /* exception */
        if (!is_dir($path)) {
            die('Does not exist ' . $path);
        }

        /* change dir */
        $flag = chdir($path);

        /* release memory */
        unset($path, $flag);

        /* return current dir */
        return getcwd();
    }

    public static function getFileInPath($path = NULL) {
        /* check empty */
        if (empty($path)) {
            $path = getcwd();
        }

        /* set dir */
        $result = scandir($path);

        /* release memory */
        unset($path, $result[0], $result[1]);

        /* resort index */
        $result = array_values($result);

        /* return an array */
        return $result;
    }

    public static function createDirectory($path, $dir_name = 'New Folder') {
        /* check empty */
        if (!is_dir($path)) {
            die('Does not exist ' . $path);
        }

        $flag = mkdir($path . '/' . $dir_name);

        /* release memory */
        unset($path, $dir_name, $dir);

        return $flag;
    }

    public static function removeDirectory($path) {
        /* remove path */
        if (!is_dir($path)) {
            die('Does not exist ' . $path);
        }

        $flag = rmdir($path);

        /* release memory */
        unset($path);

        return $flag;
    }

}

?>