<?php
require_once 'autoload.php';
require_once 'Post-Query/myconnection.php';

session_start();

$connection = new MysqliConnection();

if($_SESSION['is-admin'] == 1) {
    $layout = new Layout();
    $layout->adminLayout($connection->getConnection());
    echo "Welcome Admin";
} else {
    $layout = new Layout();
    $layout->defaultProfileLayout($connection->getConnection());
    echo "Welcome User";
}
