<?php

class loginModel extends TMC_Model {

    function __construct() {
        parent::__construct();
        $this->db->autoId();
        $this->db->setPath(database . '/training/');
    }

    public function getList() {
        $where = array('courseTypeId//==' => 1);
        return $this->db->loadFile('coursetype')->getTable('coursetype')->select()->where($where)->getResult();
    }

}

?>