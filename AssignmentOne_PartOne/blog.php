<?php
    require_once "ClassAutoLoad.php";

$details["sendToEmail"] = "dennis.mugo@strathmore.edu";
$details["sendToName"] = "DM";
$details["emailSubjectLine"] = "OOP Test mail";
$details["emailMessage"] = "Hi there this is another tests";

$OBJ_SendMail->SendeMail($details, $conf);

header("Location: ./");
exit();