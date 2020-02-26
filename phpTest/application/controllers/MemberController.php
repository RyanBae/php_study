<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/application/model/member.php';
use model\member as Member;
//require_once $_SERVER['DOCUMENT_ROOT'].'/application/config/database.php';
//use config\db as config;

class MemberController {

    public function singup(){
        echo "> singup";

        require_once $_SERVER['DOCUMENT_ROOT'] . '/application/views/member/singup.php';
    }
    public function userInsert(){
        echo "> user_insert";
        //db_insert로직 추가

        //db return 값
        $data = array('userId'=>$_GET['userId'],
            'password'=>$_GET['password'],
            'userName'=>$_GET['userName']);
        $member = new Member\Member();
        $member->insert($data);

        require_once $_SERVER['DOCUMENT_ROOT'] . '/application/views/member/complete.php';

    }
    public function login(){
        echo "> login";
        require_once $_SERVER['DOCUMENT_ROOT'].'/application/views/member/login.php';
    }

    public function loginComplete(){
        echo "> login_complete";
        //db_insert로직 추가
        $member = new Member\Member();
        $result = $member->selectOne($_POST['userId']);
        print_r($result);
        $flag = false;
        if($result[2]===$_POST['password']){
            $flag = true;
        }

        if($flag == true){
            require_once $_SERVER['DOCUMENT_ROOT'].'/application/views/member/login_complete.php';
        }else{
            $this->login();
           // require_once $_SERVER['DOCUMENT_ROOT'].'/application/views/member/login.php';
        }
    }

    public function memberList(){
        echo "> login_complete";
        $member = new Member\Member();
        $findAll = $member->selectAll();
        print_r($findAll);
        //echo $findAll;
        require_once $_SERVER['DOCUMENT_ROOT'].'/application/views/member/memberList.php';

    }



}
