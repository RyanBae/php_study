<?php

class MypageController{

    public function update($data){
        echo ' Mypage > update';
        //db에서 회원 정보 가져오기.

        $result = array('userId'=>'admin',
            'password'=>'',
            'userName'=>'관리자');

        require_once $_SERVER['DOCUMENT_ROOT'].'/application/views/mypage/update.php';
    }

}
