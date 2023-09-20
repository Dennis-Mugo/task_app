<?php
require_once "connection.php";

$Username = $_POST["Username"];
$FullName = $_POST["FullName"];

$Email = $_POST["Email"];
$Passwords = $_POST["Passwords"];

// if (!strcmp($Passwords, $Confirm) == 0){
//     print "Password not Matching";
// } else {

$insert_data = "INSERT Users (Username, FullName, Passwords, Email) values ('$Username', '$FullName', '$Passwords', '$Email');";


if ($conn -> query($insert_data)) {
    header("Location: ../index.php");
    exit();
}
else {
    echo $conn -> connect_error;
}
