<?php
require_once "ClassAutoLoad.php";
date_default_timezone_set("Africa/Nairobi");
if (isset($_GET['token'])) {
    $token = $_GET['token'];
    $result = $MYSQL->select("select * from users where token='$token' AND token_valid='1'");
    if (!empty($result)) {
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        $token_expired = new DateTime($result['token_expire']) < new DateTime('now');
        if ($token_expired === 1) {
            //Token has expired
            invalidateToken($MYSQL, $result['token']);
            handle_token_invalid();
            exit();
        } else {
            //Token is valid
            //Invalidate the token since the email has already been verified
            invalidateToken($MYSQL, $result['token']);
            session_start();
            $_SESSION['user'] = $result;
            
            header("Location: index.php?signup=successful");
            exit();
        }
    } else {
        handle_token_invalid();
    }
    
    
}

function handle_token_invalid() {
    header("Location: signup.php?token=invalid");
    exit();
}

function invalidateToken($MYSQL, $token) {
    $table = "users";
    $data = array("token_valid" => 0);
    $where = array("token" => $token);
    $MYSQL->update($table, $data, $where);
    
}
