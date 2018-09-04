<?php
/**
 * Created by PhpStorm.
 * User: matheus
 * Date: 03/09/18
 * Time: 16:00
 */


$conn = new mysqli('localhost', 'root', '', 'php_mysql_iniciando');

if($conn-> connect_errno){
    die('falhou a conexão ('. $conn -> connect_errno .')' . $conn->connect_error);
}

//$result = $conn->query('INSERT INTO users (email) VALUE ("erik@erik.com")');



