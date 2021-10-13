<?php

class TMC_Array {

    public static function arrayTruncate($array = array()) {
        $result = array();
        foreach ($array as $index => $val) {
            if (isset($result[$val])) {
                continue;
            }
            $result[$val] = $val;
        }
        unset($array, $index, $val);
        return $result;
    }

}

?>