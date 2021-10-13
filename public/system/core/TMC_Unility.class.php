<?php

class TMC_Unility {

    public static function isCountable($data) {
        if (is_array($data)) {
            return count($data);
        } else if (is_object($data)) {
            return 1;
        } else {
            return FALSE;
        }
    }

}

?>