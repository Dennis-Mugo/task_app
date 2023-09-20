<?php
require_once "connection.php";



// $insert_data = "INSERT Users (Username, FullName, Passwords, Email) values ('$Username', '$FullName', '$Passwords', '$Email');";
$spot_user = "SELECT * FROM `Users`;";
$users = $conn -> query($spot_user);


if ($user_row = $users -> fetch_assoc()) {
    $Email = $_POST["Email"];
    $Passwords = $_POST["Passwords"];
    
    while ($user_row = $users -> fetch_assoc()) {
     
        $theEmail = $user_row["Email"];
        $thePass = $user_row["Passwords"];

        if ($theEmail == $Email && $thePass == $Passwords){
            header("Location: ../main.php");
            $displayname = $user_row["Username"];
            exit();
        }
    }
    if ($theEmail !== $Email && $thePass !== $Passwords){
        echo "AHHJOh";
        exit();
    }
   
}
else {
    echo $conn -> connect_error;
}

?>