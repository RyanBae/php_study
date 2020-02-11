<?php
namespace model\dbConnect;

require_once $_SERVER['DOCUMENT_ROOT'].'/application/config/database.php';
use config\db as config;

class DbConnect{
    public function __construct()
    {
        $this->connect();
    }

    public function connect(){
        $db_config = config\db_con();
        $connect = mysqli_connect($db_config['host'], $db_config['id'], $db_config['pass'], $db_config['table']);

        if($connect){
            echo "db 연결 성공";
        }else{
            echo "db 연결 실패";
        }

        return $connect;

    }
}