<?php
namespace Traits;
trait View
{
    public function view($dir, $vars=null) {
        $dir = str_replace('.','/', $dir);

        if($vars)
            extract($vars);
        $path = realpath(dirname(__FILE__,2).'/app/views/'.$dir.'.php');
      
        if(file_exists($path)){
            // if($vars)
            //     $vars;
           return require_once($path);
        }
     else {
            echo 'this view ['.$dir.'] not exist';
        }
    }
    protected function asset($dir) {
        global $base_url;
        $path = $base_url."public/".$dir;
        echo $path;
    }
    protected function include($dir, $vars = null) {
            $dir = str_replace('.','/', $dir);
        if($vars)
            extract($vars);
        $path = realpath(dirname(__FILE__,3).'/app/views/'.$dir.'.php');
        if(file_exists($path)){
           return require_once($path);
        }
     else {
            echo 'this view ['.$dir.'] not exist';
        }
    }
    protected function url($url) {
        if($url[0]=='/'){
            $url= substr($url, 1 , strlen($url) - 1);
        }
        global $base_url;
        echo $base_url.$url;
    }
    }