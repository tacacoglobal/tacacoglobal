<?php

class TMC_Meta {

    public function __construct(TMC_Object $object) {
        $object = get_object_vars($object);
        foreach ($object as $property => $value) {
            $this->$property = $property;
        }
    }

}

?>