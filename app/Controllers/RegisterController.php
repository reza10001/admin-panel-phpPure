<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;

require '../blogi/traits/session_helper.php';

class RegisterController extends Controller{
    public function create(){
    
        $this->view('register');
    }
    public function store(){

        foreach($_POST as $key=>$val){
            $_POST[$key] = htmlentities($val);
        }
        $data = [
            'username' => trim($_POST['username']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'repeatPassword' => trim($_POST['repeatPassword'])
        ];
        if(empty($data['username']) || empty($data['email']) 
        || empty($data['password']) || empty($data['repeatPassword'])){
            flash("register",'Please fill out all inputs');
            $this->back();
        } 
        //   echo 'Heloooooooooooooooo';
        // exit();
        if(!preg_match("/^[a-zA-Z0-9]*$/",$data['usersUid'])){
            flash("register","Invalid username");
           $this->back();
        }
        if(!filter_var($data['usersEmail'],FILTER_VALIDATE_EMAIL)){
            flash("register","Invalid Email");
            $this->redirect("../signup.php");
        }
        if(strlen($data['usersPwd'])<6){
            flash("register","Invalid password");
            $this->back();
        }
        else if($data['usersPwd'] !== $data['pwdRepeat']){
            flash("register","Passwords don't match");
            $this->back();
        }
        $data['usersPwd'] = password_hash($data['usersPwd'],PASSWORD_DEFAULT); 

        //Register User
        if($this->userModel->register($data)){
            $this->redirect("app/views/login.php");
        }
        else{
            die("Something went wrong");
        }
        // $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING)
    
       
    }
  
   
}
