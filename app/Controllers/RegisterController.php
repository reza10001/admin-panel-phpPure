<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;


class RegisterController extends Controller{
    public function create(){
  
        $this->view('register');
    }
    public function store(){


        // foreach($_POST as $key=>$val){
        //     $_POST[$key] = htmlentities($val);
        // }
        
      
        // $data = [
        //     'username' => $_POST['username'],
        //     'email' => $_POST['email'],
        //     'password' => $_POST['password'],
        //     'repeatPassword' => $_POST['repeatPassword']
        // ];
        

        $data = $this->purg_post_request($_POST);
    //    echo '<pre>';
    //     var_dump($data);
    //     echo '</pre>';
    //     exit;
        if(empty($data['username']) || empty($data['email']) 
        || empty($data['password']) || empty($data['repeatPassword'])){
            $this->back();
        } 


        if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
            $this->redirect("../signup.php");
        }
        if(strlen($data['password'])<6){
            $this->back();
        }
        else if($data['password'] !== $data['repeatPassword']){
            // flash("register","Passwords don't match");
            $this->back();
        }
      
        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT); 

        //Register User
        $user = new User;
        if($user->createUser($data)){
   
            return $this->redirect("login");
        }
        else{
            die("Something went wrong");
        }
    
       
    }
  
   
}
