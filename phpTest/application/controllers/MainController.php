<?php

class MainController{
    public function __construct()
    {
        //$this->router();
    }
    public function main(){
        require_once $_SERVER['DOCUMENT_ROOT'] . '/application/views/main.php';
    }
    public function error(){
        require_once $_SERVER['DOCUMENT_ROOT'] . '/application/views/error/error.php';
    }
//    public function router(){
//        echo '===MainController > Router 진입 ';
//        echo '<br>';
//        echo '$_SERVER["PATH_INFO"] :: '.$_SERVER['PATH_INFO'];
//        echo '<br>';
//
//        (isset($_SERVER['PATH_INFO']))?
//        require_once $_SERVER['DOCUMENT_ROOT'].'/application/router/router.php' :
//        require_once $_SERVER['DOCUMENT_ROOT'] . '/application/views/main.php';
//
//
//    }
}
