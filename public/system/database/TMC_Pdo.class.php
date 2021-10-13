<?php

class TMC_Pdo {

    private $host;
    private $username;
    private $password;
    private $dbName;
    private $result = array();
    private $stagement;
    private $table;
    private $connection;

    public function setup($host, $username, $password, $dbName) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
        return $this;
    }

    public function connect() {
        $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName, $this->username, $this->password);

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
        $this->stagement = $this->connection->query($sql);
        return $this;
    }

    public function getAssoc() {
        if ($this->stagement->execute()) {
            while ($row = $this->stagement->fetch()) {
                $this->result[] = $row;
            }
        }
        return $this->result;
    }

    public function getObject() {
        if ($this->stagement->execute()) {
            while ($row = $this->stagement->fetch(PDO::FETCH_OBJ)) {
                $this->result[] = $row;
            }
        }
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
$db = new TMC_Pdo();
$db->setup('localhost', 'root', '', 'fitsscorp')->connect();
$rs = $db->getTable('service_type')->select()->getAssoc();
var_dump($rs);
?>