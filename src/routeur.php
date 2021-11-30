<?php

namespace App;

class Routeur
{
    public function run()
    {
        if(isset($_GET['action'])){
            $action = $_GET['action'];
            
            if('post' === $action){
                var_dump('toto');
            }elseif ('readArticle' === $action){
                var_dump('toto');
            }
        }else{
            require_once 'index.php';
            //header("Location: index.php");
        }
    }
}