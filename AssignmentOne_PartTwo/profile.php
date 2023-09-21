<?php
require_once 'autoload.php';
session_start();

if($_SESSION['is-admin'] == 1) {
    $layout = new Layout();
    $layout->adminLayout();
    echo "Welcome Admin";
} else {
    $layout = new Layout();
    $layout->defaultProfileLayout();
    echo "Welcome User";
}
