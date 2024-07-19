<?php
namespace App\Controllers;

use App\Controllers\Controller;

class RegisterController extends Controller{
    public function create(){
    
        $this->view('register');
    }
   
}
