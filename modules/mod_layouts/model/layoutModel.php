<?php

class layoutModel extends TMC_Model {

    function __construct() {
        parent::__construct();
        $this->db->autoId();
        $this->db->setPath(database . '/service/');
    }

    public function getServiceType() {
        return $this->db->loadFile('servicetype')->getTable('servicetype')->select()->getResult();
    }

    public function getCourse() {
        return $this->db->loadFile('course')->getTable('course')->select()->getResult();
    }

    public function getOnline() {
        $where = array('courseOnline//==//||' => 'online', 'courseOnline//==' => 'direct+online');
        return $this->db->loadFile('course')->getTable('course')->select()->where($where)->getResult();
    }

    public function getBlogLastest() {
        return $this->db->loadFile('blog')->getTable('blog')->select()->order('blogId', 'DESC')->limit(0, 3)->getResult();
    }

}

?>