<?php

class User {
    private $user = array(
      'id' => '',
      'name' => '',
      'age' => ''
    );

    public function GetUser(){
        return $this -> user;
    }
}