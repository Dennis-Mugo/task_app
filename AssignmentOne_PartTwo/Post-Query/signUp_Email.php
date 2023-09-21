<?php

include_once 'signUp_Process.php';
require_once 'PHPMailer/vendor/autoload.php';

$str = rand();
$code = md5($str);

$spot_user = "SELECT * FROM `Users`;";
$users = $con->query($spot_user);

print $code;

