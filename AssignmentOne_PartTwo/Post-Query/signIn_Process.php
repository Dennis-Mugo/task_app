<?php
require_once "myconnection.php";

if (isset($_POST['SignIn'])) {
    $Email = $_POST["Email"];
    $Passwords = $_POST["Passwords"];

    if (empty($Email) || empty($Passwords)) {
        header("Location: ../signIn.php?error=empty-fields");
        exit();
    } else {
        $sql = "SELECT * FROM `Users` WHERE Email=?;";
        $stmt = mysqli_stmt_init($con);
        if (! mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signIn.php?error=sql-error");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $Email);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($row = mysqli_fetch_assoc($result)) {
                if (! password_verify($Passwords, $row['Passwords'])) {
                    header("Location: ../signIn.php?error=wrong-pwd");
                    exit();
                } else {
                    session_start();
                    $_SESSION['userId'] = $row['UserId'];
                    $_SESSION['userUid'] = $row['Username'];
                    $_SESSION['is-admin'] = $row['is_admin'];

                    header("Location: ../main.php?login=success");
                    exit();
                }
            } else {
                header("Location: ../signIn.php?error=no-user");
                exit();
            }
        }
    }
} else {
    header("Location: ../signIn.php?error=form-error");
    exit();
}