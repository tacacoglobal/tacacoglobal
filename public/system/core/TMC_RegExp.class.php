<?php

class TMC_RegExp {
    
    public static function regUserName(){
        $reg = '/([a-z][A-Z][0-9]\.|_)+/';
        return $reg;
    }
    
}

?>