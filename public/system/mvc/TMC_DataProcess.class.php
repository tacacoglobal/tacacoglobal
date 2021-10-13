<?php

class TMC_DataProcess {

    public static function getData($object_name, $inputData = array()) {
        /* create new object */
        $object = new $object_name();

        /* pkey of table */
        $primary = $object->primary;

        /* result */
        $result = array();

        /* set data for object */
        foreach ($object as $prop => $val) {
            /* exists property */
            if (isset($inputData[$prop])) {
                $result[$prop] = $inputData[$prop];
            }
        }

        /* release memory */
        unset($object, $inputData, $prop, $val, $primary, $object_name);

        /* return */
        return $result;
    }

}

?>