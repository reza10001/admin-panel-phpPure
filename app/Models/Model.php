<?php

class Model {

private $dsn;
private $user;
private $pass;
private $mdb;

 public function __construct(){
    $this->dsn = 'mysql:host='.$_ENV['dbHost'].';dbname='.$_ENV['dbName'];
    $this->user = $_ENV['dbUser'];
    $this->pass = $_ENV['dbPass'];
    $mdb = new MeekroDB($this->dsn,$this->user, $this->pass );
    
    
 }
}