<?php

require_once "connection.php";

// using isset()

// if(isset($_POST["Username"])){
//     $Username = $_POST["Username"];
// }

// if(isset($_POST["FullName"])){
// $FullName = $_POST["FullName"];
// }

// if(isset($_POST["Email"])){
// $Email = $_POST["Email"];
// }

// if(isset($_POST["Passwords"])){
// $Passwords = $_POST["Passwords"];
// }


if (isset($_POST["Submit"])) {
    $Username = $_POST["Username"];
    $FullName = $_POST["FullName"];
    $Email = $_POST["Email"];
    $Passwords = $_POST["Passwords"];

    $insert_data = "INSERT Users (Username, FullName, Passwords, Email) values ('$Username', '$FullName', '$Passwords', '$Email')";

    if ($conn->query($insert_data) === TRUE) {
        header("Location: signUp_Email.php");
        exit();
    } else {
        echo $conn->connect_error;
    }
}
function FullName()
{
    global $FullName;
    return $FullName;
}
function Email()
{
    global $Email;
    return $Email;
}

?>