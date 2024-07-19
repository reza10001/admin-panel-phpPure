<?php 

namespace App\Models;

use App\Models\Model;

class User extends Model{
    
    public function createUser($username,$email,$password){
        $this->mdb->insert('users', [
            'username' => $username,
            'email' => $email,
            'password' => $password
          ]);
    }
}