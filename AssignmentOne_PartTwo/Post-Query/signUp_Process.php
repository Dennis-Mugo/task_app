<?php

require_once "myconnection.php";
require_once "../autoload.php";

if (isset($_POST["Submit"])) {
    $Username = $_POST["Username"];
    $FullName = $_POST["FullName"];
    $Email = $_POST["Email"];
    $Passwords = $_POST["Passwords"];

    $insert_data = "INSERT Users (Username, FullName, Passwords, Email) values ('$Username', '$FullName', '$Passwords', '$Email');";

    if ($con->query($insert_data)) {
        $str = rand();
        $code = md5($str);
        $sendEmail = new Values($FullName, $Email, $code);
        $sendEmail->sendCode($code);
        $sendEmail->sendEmail();
        exit();
    } else {
        echo $con->connect_error;
    }
}