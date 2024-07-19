<?php
namespace App\Controllers;

use App\Controllers\Controller;

class LoginController extends Controller{
    public function login(){
    
        $this->view('login');
    }

   
}
