<?php

namespace Traits;
class Session_helpers
{
    
// function flash($name = '', $message = ''){
//    if(!empty($name)){
//     if(!empty($message) && empty($_SESSION[$name])){

//         $_SESSION[$name] = $message;

//     }else if(empty($message) && !empty($_SESSION[$name])){

//         unset($_SESSION[$name]);
		
//     }
//     }
// }

 function checkSessions(){
$args = func_num_args();
if($args===0)
	return false;	
if($args > 0){
	$sessions = func_get_args();

	foreach($sessions as $session){
		if(empty($_SESSION[$session])){
				return false;
		}
		
	}
	return true;
}
}

static function regenerateSessions(){
	session_unset();
    session_destroy();
    session_start();
    session_regenerate_id(true);
   
}

static function  csrf(){
	$token = bin2hex(random_bytes(16));
    $_SESSION['csrfTokens'][$token] = time(); 
    echo "<input type ='hidden' name='token' value='$token' />";
}

		function validateCSRFToken($token) {

			$this->garbageCollectCsrfTokens();

			//if it is a validate token clear it
			//and then return true
			if (isset($_SESSION['csrfTokens'][$_POST['token']]) === TRUE) {
				unset($_SESSION['csrfTokens'][$_POST['token']]);
				return TRUE;
			}

			return FALSE;

		}

		function garbageCollectCsrfTokens() {

			//here we are setting our expiration timestamp
			//to 1 day ago
			//this has been hardcoded here for simplicity
			$expiration = time() - 86400; //86400 is the # of seconds in 24 hours

			foreach ($_SESSION['csrfTokens'] as $k => $time) {

				if ($time < $expiration) {
					//unset since it's expired
					unset($_SESSION['csrfTokens'][$k]);
				}

			}

		}
	}
	