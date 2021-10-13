<?php

class chatModel extends TMC_Model {

    function __construct() {
        parent::__construct();
        $this->db->setPath(database . '/service/');
    }

    public function getNumRow() {
        $where = array('blogTypeId//>' => 1);
        return $this->db->loadFile('blog')->getTable('blog')->select()->where($where)->getNumRow();
    }

    public function getAll($x, $y) {
        $where = array('blogTypeId//>' => 1);
        return $this->db->loadFile('blog')->getTable('blog')->select()->where($where)->limit($x, $y)->getResult();
    }

    public function getList() {
        $where = array('blogTypeId//>' => 1);
        return $this->db->loadFile('blog')->getTable('blog')->select()->where($where)->getResult();
    }

    public function getBlogItem() {
        $where = array('blogId//==' => $_GET['blogId']);
        return $this->db->loadFile('blog')->getTable('blog')->select()->where($where)->getResult()[0];
    }

    public function getNumForType() {
        $where = array('blogTypeId//==' => $_GET['blogTypeId']);
        return $this->db->loadFile('blog')->getTable('blog')->select()->where($where)->getNumRow();
    }

    public function getByType($x, $y) {
        $where = array('blogTypeId//==' => $_GET['blogTypeId']);
        return $this->db->loadFile('blog')->getTable('blog')->select()->where($where)->limit($x, $y)->getResult();
    }
    
    public function getByTypeAll() {
        $where = array('blogTypeId//==' => $_GET['blogTypeId']);
        return $this->db->loadFile('blog')->getTable('blog')->select()->where($where)->getResult();
    }

    public function getBlogRelative() {
        $where = array('blogId//>' => $_GET['blogId']);
        return $this->db->loadFile('blog')->getTable('blog')->select()->where($where)->limit(0, 5)->getResult();
    }

    public function getBlogType() {
        $where = array('blogTypeId//>' => 1);
        return $this->db->loadFile('blogType')->getTable('blogType')->select()->where($where)->getResult();
    }

    public function getBlogLastest() {
        $where = array('blogId//>' => $_GET['blogId']);
        return $this->db->loadFile('blog')->getTable('blog')->select()->order('blogId', 'DESC')->where($where)->limit(0, 5)->getResult();
    }

    public function getTypeName() {
        $where = array('blogTypeId//==' => $_GET['blogTypeId']);
        return $this->db->loadFile('blogType')->getTable('blogType')->select()->where($where)->getResult()[0]['blogTypeName'];
    }

}

?>