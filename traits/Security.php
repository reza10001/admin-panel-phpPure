<?php 
namespace Traits;
Trait Security{

    protected function purg_post_request(array $data){
        
if($data === $_POST){
    foreach($_POST as $key => $val){
        $data[$key] = htmlentities($val);
        $data[$key] = trim($val);
    }
}else{
    foreach($data as $val){
        $data[$val] = htmlentities($_POST[$val]);
        $data[$val] = trim($_POST[$val]);

    }
   
}
return $data;
   
    //    return $data = [
    //         'username' => trim($_POST['username']),
    //         'email' => trim($_POST['email']),
    //         'password' => trim($_POST['password']),
    //         'repeatPassword' => trim($_POST['repeatPassword'])
    //     ];
    }
}