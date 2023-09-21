<?php

$lang["subject_sign_up_verify"] = "Verify Account";
$lang["sign_up_verify"] = "
Hello {{fullname}},

You requested an account on {{site_name}}.

In order to use this account click <a href='localhost/148603/2.2/task_app/task_app/AssignmentOne_PartOne/signup_verify.php?token={{token}}'>here</a> to complete the registration process.

Regards,

Systems Admin
{{site_name}}
";

$lang["sign_up_verify"] = nl2br($lang["sign_up_verify"]); //applies nl2br to format email as shown above