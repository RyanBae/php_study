<?php
namespace model\dbConnect;

require_once $_SERVER['DOCUMENT_ROOT'].'/application/config/database.php';
use config\db as config;

class DbConnect{
    private static $instance = null;
    private $conn;

    public function __construct()
    {
        $db_config = config\db_con();
        $this->conn = mysqli_connect($db_config['host'], $db_config['id'], $db_config['pass'], $db_config['table']);
        if(!$this->conn->set_charset("utf8")){
            printf("utf8 error");
        }else{
            printf("utf8 ::");
        }
        if($this->conn){
            echo "db 연결 성공";
        }else{
            echo "db 연결 실패";
        }

    }

    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new DbConnect();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->conn;
    }

}