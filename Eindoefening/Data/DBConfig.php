<?php

class DBConfig extends PDO {

    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;

    public function _construct() {
        $this->engine = 'mysql';
        $this->host = 'localhost';
        $this->database = 'webshop';
        $this->user = 'cursusgebruiker';
        $this->pass = 'cursuspwd';
        $dns = $this->engine . ':dbname=' . $this->database . ";host=" . $this->host . "; charset=utf8";
        parent::__construct($dns, $this->user, $this->pass);
    }

}
