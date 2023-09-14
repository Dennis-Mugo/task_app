<?php

// create the db connection

$conn = new mysqli("localhost:3306", "root", "newpassword", "Users");

// verify the db connection

if ($conn -> connect_error){
    die("Connection failed" . $conn -> connect_error);
}
else {
    print "Connection Successful";
}