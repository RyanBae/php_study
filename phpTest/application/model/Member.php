<?php
namespace model\member;

require_once $_SERVER['DOCUMENT_ROOT'].'/application/model/DbConnect.php';
use model\dbConnect\DbConnect as dbConnect;

class Member{


    public function insert($data){
        echo $data['userId'];
        echo $data['password'];
        echo $data['userName'];

        $db=dbConnect::getInstance()->getConnection();
        $sql = "INSERT INTO MEMBER (userId, password, userName, position) VALUES
                ('".$data['userId']."', '".$data['password']."', '".$data['userName']."', '1')";
        //$query = mysqli_query($db, $sql);
        if($db->query($sql)===true){
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $db->error;
        }

        mysqli_close($db);

    }
    public function selectAll(){
        $db = dbConnect::getInstance()->getConnection();
        echo '<br>';
        //$db = $conn->getConnection();
        echo '====> selectAll';
        echo '<br>';
        //var_dump($db);
        $query = mysqli_query($db, "select * from MEMBER");
        $result = mysqli_fetch_array($query);
        return $result;
        mysqli_close($db);
    }
    public function selectOne($id){
        $db=dbConnect::getInstance()->getConnection();
        $sql = "select * from MEMBER where userId = '".$id."'";
        $query = mysqli_query($db, $sql);
        $result = mysqli_fetch_array($query);
        return $result;
        mysqli_close($db);
    }

    public function updatePassword($id, $oldPass, $newPass){
        $user = $this->selectOne($id);
        print_r($user);
        echo $id;
        echo $oldPass;
        echo $newPass;
        echo $user['password'];
        if($user['password']==$oldPass){
            echo '<br>';
            echo 'yes';
        }else{
            echo '<br>';
            echo 'no';
        }


    }


}