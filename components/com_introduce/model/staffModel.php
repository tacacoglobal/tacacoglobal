<?php

class staffModel extends TMC_Model {

    function __construct() {
        parent::__construct();
        $this->db->setPath(database . '/people/');
    }

    public function getLimit() {
        $table = array(
            'staffprofile' => array(
                'level' => 'levelId',
                'staff' => 'staffId'
            )
        );
        $column = array(
            'staff' => array('staffId', 'staffName', 'staffImage'),
            'level' => array('levelId', 'levelName'),
            'staffprofile' => array('levelId', 'staffId', 'branchId')
        );
        $listFile = array('staffprofile', 'staff', 'level');
        $where = array('branchId//==' => 1);
        return $this->db->loadFileSP($listFile)->filter($column)->joinTableSC($table)->where($where)->limit(0, 3)->getResult();
    }

    public function getList() {
        $table = array(
            'staffprofile' => array(
                'level' => 'levelId',
                'staff' => 'staffId'
            )
        );
        $column = array(
            'staff' => array('staffId', 'staffName', 'staffImage'),
            'level' => array('levelId', 'levelName'),
            'staffprofile' => array('levelId', 'staffId', 'branchId')
        );
        $listFile = array('staffprofile', 'staff', 'level');
        $where = array('branchId//==' => 1);
        return $this->db->loadFileSP($listFile)->filter($column)->joinTableSC($table)->where($where)->getResult();
    }

}

?>