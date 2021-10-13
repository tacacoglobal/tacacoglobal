<?php

class careerModel extends TMC_Model {

    function __construct() {
        parent::__construct();
        $this->db->autoId();
        $this->db->setPath(database . '/people/');
    }

    public function getList() {
        $table = array(
            'candidate' => array(
                'branch' => 'branchId'
            )
        );
        $column = array(
            'candidate' => array('branchId', 'candidateId', 'candidateName', 'candidatePost', 'candidateExpire'),
            'branch' => array('branchId', 'branchName', 'branchAddress')
        );
        $where = array('branchId//==' => 1);
        $listFile = array('candidate', 'branch');
        return $this->db->loadFileSP($listFile)->filter($column)->joinTableSC($table)->where($where)->getResult();
    }

    public function getItem() {
        $table = array(
            'candidate' => array(
                'branch' => 'branchId'
            )
        );
        $column = array(
            'candidate' => array('branchId', 'candidateId', 'candidateName', 'candidatePost', 'candidateExpire', 'candidateMeta', 'candidateContent'),
            'branch' => array('branchId', 'branchName', 'branchAddress', 'branchPhone')
        );
        $where = array('candidateId//==' => $_GET['candidateId']);
        $listFile = array('candidate', 'branch');
        return $this->db->loadFileSP($listFile)->filter($column)->joinTableSC($table)->where($where)->getResult()[0];
    }

}

?>