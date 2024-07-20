<?php

use Bramus\Router\Router;

use Traits\Session_helpers;
use Traits\VisCounter;
return [

  $router->before('GET', '/.*',function(){

      $counter= new VisCounter;
  
    if(!isset($_COOKIE['visited'])){
      setcookie('visited','TRUE',time() + 7200,'/');
      $counter->count();  
      
    };

  }),  
  
    $router->before('GET','login|register',function(){
   
 
      if(isset($_SESSION['userAgent']))
      {
      
        header('location: '.BASE_URL.'home/posts');
       exit();
       }
     
    }

  ),

    $router->before('POST','/*',function(Session_helpers $session){

       //this would probably be abstracted away into
	  //a route filter or your form validation
	  if (!$session->validateCSRFToken($_POST['token']) === TRUE) {

      die('Invalid Form Data');
      } 
    }),

  $router->before('GET|POST', '/home/.*', function() {
    $session = new Session_helpers();
  
  if(!$session->checkSessions('user_id'))
  {
    Session_helpers::regenerateSessions();
    header('location: '.BASE_URL.'login');
    exit();
  }

  if ($_SESSION['sesCreated'] < time() - 10) {
    session_regenerate_id(true);
    $_SESSION['sesCreated'] = time();

}
        
    })
    
];