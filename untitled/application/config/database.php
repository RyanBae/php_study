<?php
namespace config\db;
function db_con()
{

//클래스로 만들고, 코넥션만 하고 다른데서 접속하기.
// crud , 동적쿼리
    $host = '127.0.0.1';
    $dbId = 'root';
    $password = 'rootpassword';
    $dbName = 'triplet_local';
    $dbConfig = array('host' => $host, 'id' => $dbId, 'pass' => $password, 'table' => $dbName);
    //return $dbConfig;
    return $dbConfig;
//
//$connect = @mysqli_connect($host, $dbId, $password, $dbName) or die('DB connect Error');
//
//if($connect){
//    echo "db 연결 성공";
//}else{
//    echo "db 연결 실패";
//}
//mysqli_query ( "SET NAMES UTF8" );
//
//mysqli_query ( "set session character_set_connection=utf8;" );
//mysqli_query ( "set session character_set_results=utf8;" );
//mysqli_query ( "set session character_set_client=utf8;" );
//
//$db = @mysqli_select_db($connect, $dbName) or die("DB select Error");
//    if($db){
//        echo "db 테이블 성공";
//        var_dump($db);
//    }else{
//        echo "db 테이블 실패";
//    }

//
//$result = mysqli_query($connect, "select * from NEWS where id = 1");
//    echo '<br>';
//    $re = mysqli_fetch_array($result);
//    echo $re;
//    var_dump($re);
//
//    while ($row = mysqli_fetch_array($result)){
//        echo $row['id'];
//    }
//
//}
}
?>