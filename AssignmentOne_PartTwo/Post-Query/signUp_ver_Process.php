<?php
require_once 'SignupV.php';

// $code;
if(isset($_POST["Verify"])){
    $VerCode = $_POST["Code"];

    if($VerCode == $code){
        header("Location: index.php");
    }
}

?>