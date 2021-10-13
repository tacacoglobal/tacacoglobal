<?php

class TMC_Registry {

    private static $data = array();

    public static function set($varName, $varValue) {
        self::$data[$varName] = $varValue;
    }

    public static function get($varName) {
        return self::$data[$varName];
    }

}

?>