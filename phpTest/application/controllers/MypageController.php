<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/application/model/member.php';
use model\member as Member;


class MypageController{

    public function update(){
        echo ' Mypage > update';
        //db에서 회원 정보 가져오기.



        $result = array('userId'=>'admin',
            'password'=>'',
            'userName'=>'관리자');

        require_once $_SERVER['DOCUMENT_ROOT'].'/application/views/mypage/update.php';
    }

    public function passwordUpdate(){
        echo 'Mypage > passwordUpdate';

        echo '<br>';
        echo $_POST['userId'];
        echo $_POST['userName'];
        echo $_POST['password'];
        echo $_POST['newPassword'];

        $member = new Member\Member();
        $result = $member->updatePassword($_POST['userId'],$_POST['password'],$_POST['newPassword']);


        $result = array('userId'=>$_POST['userId'],
            'password'=>$_POST['newPassword'],
            'userName'=>$_POST['userName']);
        require_once $_SERVER['DOCUMENT_ROOT'].'/application/views/mypage/updateComplete.php';
    }

}
