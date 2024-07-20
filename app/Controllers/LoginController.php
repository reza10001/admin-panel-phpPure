<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;
use Traits\VisCounter;
class LoginController extends Controller{

    public function login(){
        
       
        $this->view('login');
    }
    public function auth(){
        
        $data =  $this->purg_post_request($_POST);
 

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
        
        $counter= new VisCounter;
        $_SESSION['userAgent'] = $_SERVER['HTTP_USER_AGENT'];
        $_SESSION['IPaddress'] =  $counter->getIP();
        $_SESSION['user_id'] = $userData['id'];
        $_SESSION['username']  = $userData['username'];
        $_SESSION['sesCreated'] = time();
        $_SESSION['avatar'] =  $userData['avatar']??'upload/*.png';

        // $_SESSION['token'] = bin2hex(random_bytes(16));
        // $_SESSION['user_is_admin'] =
        return $this->redirect("dashboard");
    
     
    }

    public function logOut() {
        session_unset();
        session_destroy();
        session_start();
        session_regenerate_id(true);
        }


   
}
