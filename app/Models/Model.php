<?php

namespace App\Models;
use MeekroDB;
class Model {

private $dsn;
private $user;
private $pass;
protected $mdb;

 public function __construct(){
    $this->dsn = 'mysql:host='.$_ENV['dbHost'].';dbname='.$_ENV['dbName'];
    $this->user = $_ENV['dbUser'];
    $this->pass = $_ENV['dbPass'];
    $this->mdb = new MeekroDB($this->dsn,$this->user, $this->pass );
    
    
 }

}