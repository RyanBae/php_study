<?php

namespace application\controllers;
require $_SERVER['DOCUMENT_ROOT'] . '/application/config/Db.php';


class Member extends \Db {
    public function __construct($met,$data)
    {

        $this->$met($data);
    }

    public function member(){
        print '======> memberController';
        $db = new \Db();
        $id = 1;
        $result = $db->select_one($id);


        $id = $_GET['id'];
        $newpassword = $_GET['password'];
        $newpostion = $_GET['postion'];


    }
    public function update($data){
        $db = new \Db();
        $oldData = $db->select_Id($data['id']);

        if($data['password']!=''||$data['postion']!=''){
            $newData = array('id'=>$oldData[0],
                'userId'=>$oldData[1],
                'password'=>$data['password'],
                'userName'=>$data['postion'],
                'postion'=>$oldData[4]);
            $result = $db ->update_one($newData);
        }



        //require_once $_SERVER["DOCUMENT_ROOT"].'/application/views/member.php';

    }


}