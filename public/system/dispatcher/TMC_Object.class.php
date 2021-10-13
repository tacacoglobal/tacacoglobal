<?php

class TMC_Object {

    public $meta;

    public function __construct() {
        $this->meta = new TMC_Meta($this);
    }

}

?>