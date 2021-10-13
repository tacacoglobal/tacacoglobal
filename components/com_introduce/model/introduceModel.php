<?php

class introduceModel extends TMC_Model {

    function __construct() {
        parent::__construct();
        $this->db->autoId();
        $this->db->setPath(database . '/training/');
    }

    public function getLocalBlog() {
        $where = array('blogTypeId//==' => 1);
        return $this->db->loadFile('blog')->getTable('blog')->select()->where($where)->getResult();
    }

    public function getTeacher() {
        return $this->db->loadFile('teacher')->getTable('teacher')->select()->getResult();
    }

    public function getCareer() {
        $this->db->setPath(database . '/people/');
        $where = array('branchId//==' => 2);
        return $this->db->loadFile('candidate')->getTable('candidate')->select()->where($where)->getResult();
    }
    
    public function getList() {
        $table = array(
            'software' => array(
                'user' => 'userId'
            )
        );
        $column = array(
            'software' => array('userId', 'softwareId', 'softwareName', 'softwareDownloader', 'softwareLiker', 'softwareImage'),
            'user' => array('userId', 'userName')
        );
        $listFile = array(
            database . '/people/' => array('user'),
            database . '/training/' => array('software')
        );
        return $this->db->loadFileDP($listFile)->filter($column)->joinTableSC($table)->getResult();
    }

}

?>