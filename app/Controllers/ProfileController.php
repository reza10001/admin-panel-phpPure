<?php

namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\User;
class profileController extends Controller{
    public function index(){
        $user = new User;
        $data = $user->get('username,avatar');
     
        $this->view('Panel.profile',['data'=>$data]);
    }

    private function chart(){
             $contents= file(BASE_DIR.'/hits.txt',FILE_IGNORE_NEW_LINES);
            //  foreach($contents as $content){
            //     $content=explode('=>',$content);
            //     if(end($content)>time()-7){
            //         $content[0]++;
                    
            //     }else{

            //     }
            //     $content[0]++;

            //  }
            $length = sizeof($contents);
            $content = explode('=>',end($contents));
            if(end($content)>time()-7){
                $content= $content[0]+1;
                $contents[$length-1]=$content;
                file_put_contents(BASE_DIR.'/hits2.txt',$contents);

            }else{
                $content= $content[0]+1;
                $contents[$length-1]=$content;
                file_put_contents(BASE_DIR.'/hits2.txt',PHP_EOL.$contents,FILE_APPEND);
            }
    }
    public function update(){
   
        
        if( empty($_FILES['avatar'])){
                
            $this->back();
        } 
    
        $_POST['username'] = htmlentities($_POST['username']);
        
        if(!isset($_FILES['avatar']) && !empty($_FILES['avatar'])){
            $this->back();
        }
     
    
            $fileName = $_FILES['avatar']['name'] ;
            $fileSize = $_FILES['avatar']['size'] ;
            $fileType = $_FILES['avatar']['type'] ;
            $fileTmpPath = $_FILES['avatar']['tmp_name'] ;
            $fileNameSeprate = explode('.',$fileName);
            $fileExtention = strtolower(end($fileNameSeprate));
            $allowedFileExt = ['jpg','jpeg','png','doc','gif','zip','rar'];

            if(!in_array($fileExtention,$allowedFileExt)){
                $this->back();
            }
     
            $newFileName = md5(time().$fileName).'.'.$fileExtention;
            $uploadFileDir = 'upload/';
            $destPath = $uploadFileDir.$newFileName;
            if(!move_uploaded_file($fileTmpPath,$destPath)){
                $this->back();
            } 
        
        $data = [
            'username' => trim($_POST['username']),
            'avatar' => $destPath
        ];
        $user = new User;
        if($user->UpdateUser($data)){
            $data = $user->get(['avatar']);
            $_SESSION['avatar'] = $data['avatar'];
         
            $this->back();
        };
    

    }
}