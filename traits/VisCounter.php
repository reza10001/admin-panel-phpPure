<?php

namespace Traits;
class VisCounter
{

    //$Every specifies the reset Cicle of visitCounter
    static  function count($Every=15){
 
        $contents= file(BASE_DIR.'hits2.txt',FILE_IGNORE_NEW_LINES);
  
        $endlength = sizeof($contents)-1;
        $content = explode('=>',end($contents));
        if(empty($contents)){
            $aa= '1=>'.time();
            file_put_contents(BASE_DIR.'hits2.txt',$aa);
        }       
     
        elseif(end($content)>time()-$Every){
           
            $content[0]= $content[0]+1;
          
            $contents[$endlength]= implode('=>',$content);
            //   echo '<pre>';
            // var_dump($contents[$endlength]);
            // echo '</pre>';
            // exit;
           
            file_put_contents(BASE_DIR.'hits2.txt',implode(PHP_EOL,$contents));
      
        }else{
            
            $aa= PHP_EOL.'1=>'.time();
            $contents=$aa;
    
            file_put_contents(BASE_DIR.'hits2.txt',$contents,FILE_APPEND);
        }
   
    }
    static  function getNumVisits(){
             
     return $fileContent = file(BASE_DIR.'hits2.txt',FILE_IGNORE_NEW_LINES);     
    }
    static  function getLastVisits(){
   

         $fileContent = file(BASE_DIR.'hits2.txt',FILE_IGNORE_NEW_LINES);     
         $content = explode('=>',end($fileContent));
         return $content[0];
    }

    public function getIP() {
        $ipaddress = '';                 
        if(isset($_SERVER['REMOTE_ADDR']))
             $ipaddress = $_SERVER['REMOTE_ADDR'];
         else
             $ipaddress = 'UNKNOWN';
         return $ipaddress;
    }


} 
