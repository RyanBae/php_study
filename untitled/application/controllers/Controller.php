<?php
namespace application\controllers;

require $_SERVER['DOCUMENT_ROOT'] . '/application/config/Db.php';
require 'application/model/User.php';
use User;
class Controller{

    public $controller;
    public $action;
    public function __construct(){

        $db = new \Db();
        $id = 1;
        $result = $db->select_one($id);
        echo $result[0];
        $user = new User();
        $data = $user -> GetUser();

//        if($data['age'] == 'a'){
//            $data['age'] = 29;
//        }else{
//            $data['age'] = 32;
//        }

        $id = $result[1];
        $password = $result[2];
        $postion = $result[3];

        require_once 'application/views/member.php';

/*        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Title</title>
        </head>
        <body>
        <b>이름과 나이를 입력하세요.</b>
        <form action="application/controllers/Member.php" method="get" >
            이름 : <input type="text" name="name"><br>
            나이 : <input type="text" name="age"><br>
        <input type = "submit" value = "submit"/>
        </form>
        </body>
        </html>
        ';*/


    }
}