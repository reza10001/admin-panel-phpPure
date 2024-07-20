<?php 

namespace App\Models;

use App\Models\Model;
class User extends Model{
    
  private  $table = 'users';


    public function createUser($data){
       if( $this->mdb->insert('users', [
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password']
          ])){
            return true;
          };
    }
    public function UpdateUser($data){
      return $results = $this->mdb->query("UPDATE $this->table SET username=%s0 , avatar=%s1 WHERE id=%i2",$data['username'],$data['avatar'],$_SESSION['user_id']);
    }
   
    public function findUserByEmailOrUsername($username){
    $result =  filter_var($username,FILTER_VALIDATE_EMAIL);
      
        return $account = $this->mdb->queryFirstRow("SELECT * FROM $this->table WHERE username=%s0 OR email=%s0", $username);
     
    }


    public function getAdmin($columns){
      if(is_array($columns))
        $columns = implode(',',$columns);
      return $results = $this->mdb->query("SELECT $columns FROM $this->table WHERE id=%i0",$_SESSION['user_id']);
      // return $results = $this->mdb->queryFirstRow("SELECT $columns FROM $this->table WHERE id=%i0",$_SESSION['user_id']);
    }

    public function get($columns){
      if(is_array($columns))
        $columns = implode(',',$columns);
      // return $results = $this->mdb->query("SELECT $columns FROM $this->table WHERE id=%i0",$_SESSION['user_id']);
      return $results = $this->mdb->queryFirstRow("SELECT $columns FROM $this->table WHERE id=%i0",$_SESSION['user_id']);
    }

    public function count(){
      global $table;
    
      // return $results = $this->mdb->query("SELECT COUNT(id) FROM posts");
      return $results = $this->mdb->queryFirstColumn("SELECT COUNT(id) FROM  $this->table");
     }
   
     public function all(){
      global $table;
        return $results = $this->mdb->query("SELECT * FROM  $this->table WHERE user_id=%i",$_SESSION['user_id']);
     }
}