<?php

class MainController{
    public function __construct()
    {
        $this->main();
    }
    public function main(){
        require_once $_SERVER['DOCUMENT_ROOT'] . '/application/views/main.php';
    }
}
