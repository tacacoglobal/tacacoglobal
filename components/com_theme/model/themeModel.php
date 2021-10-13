<?php

class themeModel extends TMC_Model {

    function __construct() {
        parent::__construct();
        $this->db->autoId();
        $this->db->setPath(database . '/service/');
    }

    public function getNumRow() {
        return $this->db->loadFile('theme')->getTable('theme')->select()->getNumRow();
    }

    public function getAll($x, $y) {
        return $this->db->loadFile('theme')->getTable('theme')->select()->limit($x, $y)->getResult();
    }
    
    public function getList() {
        return $this->db->loadFile('theme')->getTable('theme')->select()->getResult();
    }

}

?>