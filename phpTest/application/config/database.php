<?php
namespace config\db;
function db_con(){
    $host = '127.0.0.1';
    $dbId = 'root';
    $password = 'rootpassword';
    $dbName = 'triplet_local';
    $dbConfig = array('host' => $host, 'id' => $dbId, 'pass' => $password, 'table' => $dbName);
    //return $dbConfig;
    return $dbConfig;
}