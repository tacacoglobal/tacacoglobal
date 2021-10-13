<?php

class TMC_Mysqli {

    private $host;
    private $username;
    private $password;
    private $dbName;
    private $result = array();
    private $table;
    private $pkey;
    private $connection;

    public function setup($host, $username, $password, $dbName) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
        return $this;
    }

    public function connect() {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->dbName);

        if (!$this->connection) {
            die('Connection failed');
        }
    }

    public function getTable($table) {
        $this->table = $table;
        return $this;
    }

    public function select($column = '*') {
        $sql = 'select ' . $column . ' from ' . $this->table;
        $this->result = mysqli_query($this->connection, $sql);
        return $this;
    }

    public function getAssoc() {
        $data = array();
        if ($this->result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($this->result)) {
                $data[] = $row;
            }
        }
        $this->result = $data;
        return $this->result;
    }

    public function getObject() {
        $data = array();
        if ($this->result->num_rows > 0) {
            while ($row = mysqli_fetch_object($this->result)) {
                $data[] = $row;
            }
        }
        $this->result = $data;
        return $this->result;
    }

    public function insert() {
        
    }

    public function inserts() {
        
    }

    public function update() {
        
    }

    public function updates() {
        
    }

    public function delete() {
        
    }

}

$db = new TMC_Mysqli();
$db->setup('localhost', 'root', '', 'fitsscorp')->connect();
$rs = $db->getTable('service_type')->select()->getObject();
var_dump($rs);
?>