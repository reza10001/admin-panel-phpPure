<?php
namespace App\Controllers;

use App\Controllers\Controller;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller{
    public function index(){
        
       $post = new Post;
       $data2 = $post->user()->getAdmin('username');    
       $data1= $post->all();
       $this->view('Panel.PostLayouts.index',['data1'=>$data1,'data2'=>$data2]);
    }

    public function home(){
        $post = new Post;
        $results2 = $post->count('posts');
        $user = new User;
        $results1 = $user->count('users');

        $results3 = $post->latest();

        // echo '<pre>';
        // var_dump($results);
        // echo '</pre>';
        // exit;
        $this->view('Panel.dashboard',[
            'results1'=>$results1,
            'results2'=>$results2,
            'results3'=> $results3]
             );
    }

    public function create(){
  
         $this->view('Panel.PostLayouts.createPosts');
    }
    public function delete($id){
        $post = new Post;

        if($post->deletePost($id)){
   
            return $this->redirect("home/posts");
          
        }
    }

    public function store(){
        foreach($_POST as $key=>$val){
            $_POST[$key] = htmlentities($val);
        }
        $data = [
            'title' => trim($_POST['title']),
            'content' => trim($_POST['content']),
        ];
        $post = new Post;
    
        if($post->createPost($data)){
   
            return $this->redirect("home/posts");
          
        }
        else{
            die("Something went wrong");
        }
    }
}