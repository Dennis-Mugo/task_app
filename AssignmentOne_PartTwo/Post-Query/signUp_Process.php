<?php

require_once "myconnection.php";
require_once "../autoload.php";

if (isset($_POST["Submit"])) {
    $Username = $_POST["Username"];
    $FullName = $_POST["FullName"];
    $Email = $_POST["Email"];
    $Passwords = $_POST["Passwords"];

    $hashedPasswords = password_hash($Passwords, PASSWORD_DEFAULT);

    $sql = "INSERT Users (Username, FullName, Passwords, Email) values ('$Username', '$FullName', '$hashedPasswords', '$Email');";

    if ($con->query($sql)) {
        $idSql = "SELECT * FROM Users WHERE Username = '$Username';";
        $result = $con->query($idSql);
        $row = $result->fetch_assoc();
        $id = $row['id'];

        $str = rand();
        $code = md5($str);
        $sendEmail = new Values($FullName, $Email, $code);
        $sendEmail->sendCode($id);

        $sendEmail->sendEmail($id);
        exit();
    } else {
        echo $con->connect_error;
    }
} else {
    header("Location: ../signUp.php?error=form-error");
    exit();
}