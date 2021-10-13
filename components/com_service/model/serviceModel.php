<?php

class serviceModel extends TMC_Model {

    function __construct() {
        parent::__construct();
        $this->db->autoId();
        $this->db->setPath(database . '/service/');
    }

    public function getList() {
        return $this->db->loadFile('service')->getTable('service')->select()->getResult();
    }

    public function getItem() {
        $where = array('serviceId//==' => $_GET['serviceId']);
        return $this->db->loadFile('service')->getTable('service')->select()->where($where)->getResult()[0];
    }

}

?>