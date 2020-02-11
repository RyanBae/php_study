<?php

class MemberController {
    public function singup(){
        echo "> singup";
        require_once $_SERVER['DOCUMENT_ROOT'] . '/application/views/member/singup.php';
    }
    public function user_insert($data){
        echo "> user_insert";
        //db_insert로직 추가


        //db return 값
        $result = array('userId'=>$data['userId'],
            'password'=>$data['password'],
            'userName'=>$data['userName']);

        require_once $_SERVER['DOCUMENT_ROOT'] . '/application/views/member/complete.php';

    }
    public function login($data){
        echo "> login";
        require_once $_SERVER['DOCUMENT_ROOT'].'/application/views/member/login.php';
    }

    public function login_complete($data){
        echo "> login_complete";
        //db_insert로직 추가

        $flag = false;
        if($data['userId'] == 'admin'){
            if($data['password'] == '123'){
                //db return 값
                $flag = true;
                $result = array('userId'=>$data['userId'],
                    'password'=>$data['password'],
                    'userName'=>'관리자');
            }
        }

        if($flag == true){
            require_once $_SERVER['DOCUMENT_ROOT'].'/application/views/member/login_complete.php';
        }else{
            require_once $_SERVER['DOCUMENT_ROOT'].'/application/views/member/login.php';
        }
    }



}
