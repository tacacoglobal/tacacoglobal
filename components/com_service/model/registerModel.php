<?php

class registerModel extends TMC_Model {

    private $table = 'advisory';

    function __construct() {
        parent::__construct();
        $this->db->autoId();
        $this->db->setPath(database . '/service/');
    }

    public function insert($data) {
        $this->db->loadFile($this->table)->getTable($this->table)->insert($data)->execute();
    }

    //web, logo and soft package name
    public function getWlsPackage($packageId) {
        switch ($packageId) {
            case 1: return 'Starter';
            case 2: return 'Enterprice';
            case 3: return 'Professional';
            case 4: return 'Custom';
        }
    }

    public function getGgPackage($googleId) {
        switch ($googleId) {
            case 1: return 'Google 1';
            case 2: return 'Google 2';
            case 3: return 'Google 3';
            case 4: return 'Google 4';
            case 5: return 'Google 5';
            case 6: return 'Google 6';
            case 7: return 'Custom';
        }
    }

}

?>