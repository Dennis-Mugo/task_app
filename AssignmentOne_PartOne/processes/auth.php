<?php
class auth{

    public function bind_to_template($replacements, $template){
        return preg_replace_callback('/{{(.+?)}}/', function($matches) use ($replacements){
            return $replacements[$matches[1]];
        }, $template);
    }

    public function receive_sign_up($MYSQL, $OBJ_SendMail, $conf, $lang){
        if(isset($_POST["signup"])){
            $email_address = addslashes($_POST["email_address"]);
            $full_name = $_POST["full_name"];
            $pass = $_POST["pass"];
            if (!filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
                die("Invalid email format");
            }else{

                $token = md5(time());
                $token_expire = date("Y-m-d H:i:s", strtotime("+ 2hours"));
                
                $data = array("email_address" => $email_address, "username" => $full_name, "password" => $pass, 'token' => $token, 'token_expire' => $token_expire, 'token_valid' => 1);
                $table = "users";
                // $data = array("branchNo" => 'email_address', 'street' => 'token', 'city' => 'token_expire', 'postcode' => 'hello');
                // $table = "branch";
                $MYSQL->insert($table, $data);
                
                //Passes the user's name, site name and token to be formatted in the email
                $replacements = array('fullname' => $full_name, 'site_name' => $conf["site_name"], 'token' => $token);
                

                $OBJ_SendMail->SendeMail([
                    'sendToEmail' => $email_address,
                    'sendToName' => $replacements["fullname"],
                    'emailSubjectLine' => $conf["site_name"] ." - ". $lang["subject_sign_up_verify"],
                    
                    'emailMessage' => $this->bind_to_template($replacements, $lang["sign_up_verify"])
                ], $conf);
                header("Location: signup.php?token=pending");
            }
        }
    }
}