<?php

class TMC_Rewrite {

    public static function rewrite_url($route = array(), $path) {
        if ($path == '/index.php' || $path == '/') {
            return 1;
        }
        $parts = explode('/', $path);
        if (isset($parts[1])) {
            $current = $route[$parts[1]];
            $com = explode('/', $current);
            if (isset($com[0])) {
                $_GET['com'] = $com[0];
            }

            if (isset($com[1])) {
                $_GET['cl'] = $com[1];
            }

            if (isset($com[2])) {
                $_GET['act'] = $com[2];
            }
        }

        for ($i = 2; $i < (count($parts) - 1); $i++) {
            $_GET['param'][] = $parts[$i];
        }

        /* release memory */
        unset($route, $parts, $parts, $com, $i);
    }

}

?>