<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/application/config/database.php';
use config\db as config;


//쿼리 다른방식으로 날리기.
//업데이트, 인설트, 딜리트 .
//트랜젝션
class Db{
    public function __construct(){

        $this -> connect();

    }
    public function connect(){
        $db_config = config\db_con();
        echo '<br>';
        $connect = mysqli_connect($db_config['host'], $db_config['id'], $db_config['pass'], $db_config['table']);
        if($connect){
             echo "db 연결 성공";
        }else{
            echo "db 연결 실패";
        }

        return $connect;
    }

    public function select_one($id){
        $con = $this->connect();
        echo '<br>';
        echo '=======> ! select _one';
        echo '<br>';
        $query = mysqli_query($con, "select * from MEMBER where id =".$id);
        $result = mysqli_fetch_row($query);
        return $result;
        mysqli_close($con);
    }
    public function select_Id($id){
        $con = $this->connect();
        $query = mysqli_query($con, "select * from MEMBER where userId = '".$id."'");
        $result = mysqli_fetch_row($query);
        print_r($result);
        return $result;
        mysqli_close();
    }



    public function selec_all(){
        $con = $this->connect();

        echo '=====>?!';
        $query = mysqli_query($con, "select * from NEWS");
            echo '<br>';
            while ($row = mysqli_fetch_array($query)){
              echo $row['id'];
         }
        mysqli_close($con);
    }

    public function update_one($data){
        $con = $this->connect();
        echo $data['password'];
        echo $data['userName'];

    }
}