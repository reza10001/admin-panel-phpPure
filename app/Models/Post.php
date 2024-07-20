<?php 

namespace App\Models;

use App\Models\Model;
use App\Models\User;

class Post extends Model{


  private  $table = 'posts';


    public function createPost($data){
        if( $this->mdb->insert('posts', [
             'title' => $data['title'],
             'content' => $data['content'],
             'user_id' =>  $_SESSION['user_id'],                          
           ])){
             return true;
           };
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

     

     public function deletePost($id){
      return $results = $this->mdb->delete($this->table ,['id'=>$id]);
     }

     public function latest(){
      // return $results = $this->mdb->query("SELECT * FROM  $this->table WHERE user_id=%i ORDER BY id desc  Limit 3",$_SESSION['user_id']);
     return $results = $this->mdb->query("SELECT * FROM  $this->table ORDER BY id desc  Limit 3");

    }

     public function user(){
       return $user = new User;
     }

}