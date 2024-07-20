<?php

namespace App\Controllers;
require BASE_DIR.'traits/View.php';
require BASE_DIR.'traits/Redirect.php';
require BASE_DIR.'traits/Security.php';
use Traits\Redirect;
use Traits\Security;
use Traits\View;

class Controller{
    use View,Redirect,Security; 
   
  
}
