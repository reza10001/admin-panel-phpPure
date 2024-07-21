<?php 

namespace App\Models;

use App\Models\Model;

class User extends Model{
    
    public function createUser($data){
       if( $this->mdb->insert('users', [
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password']
          ])){
            return true;
          };
    }
    
    public function findUserByEmailOrUsername($username){
    $result =  filter_var($username,FILTER_VALIDATE_EMAIL);
      
        return $account = $this->mdb->queryFirstRow("SELECT * FROM users WHERE username=%s0 OR email=%s0", $username);
     
    }
}