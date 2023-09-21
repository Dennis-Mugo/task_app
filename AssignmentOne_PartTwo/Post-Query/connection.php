<?php

// create the db connection

$con = new mysqli("localhost:3307", "root", "newpassword", "Users");

// verify the db connection

if ($con -> connect_error){
    die("Connection failed" . $con -> connect_error);
}
else {
    print "Connection Successful";
}