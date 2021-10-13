<?php

class TMC_Limit {

    public static function getLastFile($path) {
        $list = array_values(TMC_Directory::getFileInPath($path));
        return basename($list[count($list) - 1], '.txt');
    }

    public static function createNewFile($path, $content = array()) {
        /* last file */
        $last_file = self::getLastFile($path);
        $last_file = basename($last_file, '.txt');

        /* named for file */
        $part = explode('_', $last_file);
        if (count($part) == 2) {
            $part[1] ++;
            $file = $part[0] . '_' . $part[1] . '.txt';
        } else {
            $file = str_replace('.txt', '', $last_file) . '_1.txt';
        }

        /* put content into file */
        file_put_contents($path . $file, json_encode($content));

        /* release memory */
        unset($part, $file, $content, $last_file);

        /* return last file has jus created */
        return self::getLastFile($path);
    }

}

?>