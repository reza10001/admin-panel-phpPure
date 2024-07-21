<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;
class HomeController extends Controller{
    public function index(){
        $this->view('home');
    }
}