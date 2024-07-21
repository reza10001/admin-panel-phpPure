<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;
class LoginController extends Controller{

    public function login(){
    
        $this->view('login');
    }
    public function auth(){
        
 
        foreach($_POST as $key=>$val){
            $_POST[$key] = htmlentities($val);
        }
        $data = [
            'username/email' => trim($_POST['username/email']),
            'password' => trim($_POST['password']),
        ];
 

        if( empty($data['username/email']) || empty($data['password'])){
            // flash("register",'Please fill out all inputs');
      
            $this->back();
        } 
      
        $user = new User;
       
       $userData = $user->findUserByEmailOrUsername($data['username/email']);

       if(!$userData){
        // flash("login",'user not found ');
  
            $this->back();
    }
 
       $hashedPassword = $userData['password'] ;
      
      $auth_result=password_verify($data['password'],"$hashedPassword");
  

       if(!$auth_result){
   
        // flash("login",'user not found ');
        $this->back();
        exit();
       } 
    
        $this->createUserSession($userData);
    
    }

    
    public function createUserSession($userData){
        $_SESSION['user_id'] = $userData['id'];
        $_SESSION['username']  = $userData['username'];
        $_SESSION['usersEmail'] = $userData['email'];
        // $_SESSION['user_is_admin'] =
        return $this->redirect("home");
    }

   
}
