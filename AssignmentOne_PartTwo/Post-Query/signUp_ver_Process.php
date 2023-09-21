<?php
require_once 'SignupV.php';

if(isset($_POST["Verify"])){
    $VerCode = $_POST["Code"];
    $userId = $_POST['user-id'];

    $sql = "SELECT * FROM `keys` WHERE `user_id` = '$userId';";
    $connection = new MysqliConnection();
    $result = $connection->getConnection()->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $code = $row['key'];
    }

    if($VerCode == $code){
        header("Location: index.php");
    }
}
