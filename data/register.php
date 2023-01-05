<?php 

// session_start();
include "../config.php";
$errors = array();

if (isset($_REQUEST['savedata'])) {
    
    $servername = DBHOST;
    $username = DBUSER;
    $password = DBPWD;
    $dbname = DBNAME;
    $con = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $username = mysqli_real_escape_string($con, $_POST['user_name']);
    $email = mysqli_real_escape_string($con, $_POST['user_email']);
    $password = mysqli_real_escape_string($con, $_POST['user_password']);
   

    $email_check = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($con, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "Email that you have entered is already exist!";
        echo "already_email";
    }

    if(count($errors) === 0){
        $ran_id = rand(time(), 100000000);
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $insert_data = "INSERT INTO `users` (unique_id, username, email, password, time)
        VALUES ('$ran_id','$username', '$email', '$hash',  current_timestamp())"; 
        $result = mysqli_query($con, $insert_data);
        if($result){
            $sql1 = "SELECT * FROM users WHERE email = '$email'";
            $res_sql1 = mysqli_query($con, $sql1);
            if(mysqli_num_rows($res_sql1) > 0){
                $row = mysqli_fetch_assoc($res_sql1);
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "success_account";
                
            }
        }

        // if(true){
        //     $html_user = '<html><body>';
        //     $html_user .='<table width="650" border="0" align="center" cellpadding="0" cellspacing="0" style="background:#ffffff;border:#f6f6f6 4px solid;">
        //         <tbody>
        //             <tr>
        //                 <td align="center" valign="top">
        //                     <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
        //                         <tbody>
        //                             <tr>
        //                                 <td align="center" valign="top" bgcolor="#131211">
        //                                 <table width="80" border="0" cellspacing="0" cellpadding="0">
        //                                     <tbody>
        //                                         <tr><td height="10" align="center" valign="top"></td></tr>
        //                                         <tr><td align="center" valign="top"><img src="https://logomish.com/assets/images/Logomish2.png" alt="logochemist.com" width="112" height="81"></td></tr>
        //                                         <tr><td height="10" align="center" valign="top"></td></tr>
        //                                     </tbody>
        //                                 </table>
        //                                 </td>
        //                             </tr>
        //                             <tr><td height="5" align="center" valign="middle" bgcolor="#3772FF"></td></tr>
        //                         </tbody>
        //                     </table>
        //                 </td>
        //             </tr>
        //             <tr>
        //                 <td width="620" height="259" align="center" valign="top">
        //                     <table width="596" border="0" align="center" cellpadding="0" cellspacing="0" style="font:normal 13px Arial, Helvetica, sans-serif;color:#0d0d0d;padding:0px 0;">
        //                         <tbody>
        //                             <tr><td height="20" align="center" valign="middle"></td></tr>
        //                             <tr><td height="20" align="left" valign="middle"></td></tr>
        //                             <tr><td height="73" align="left" valign="middle">
        //                                 <span style="font-size:13px;color:#302b2b;font-family:Arial, Helvetica, sans-serif;">Dear '.$username.',</span><p>Thank you submitting your information for starting a project with LogoMish. Our team will get back to you shortly.</p></td></tr>
        //                             <tr><td height="20" align="left" valign="middle">&nbsp;</td></tr>
        //                         </tbody>
        //                     </table>
        //                 </td>
        //             </tr>
        //             <tr><td align="center" valign="middle"></td></tr>
        //             <tr><td height="98" valign="middle" bgcolor="#f6f6f6">
        //                 <table width="596" border="0" align="center" cellpadding="0" cellspacing="0" style="font:normal 13px Arial, Helvetica, sans-serif;color:#0d0d0d;padding:0px 0;">
        //                     <tbody>
        //                         <tr><td width="574" height="73" align="left" valign="middle"><span style="font-size:13px;color:#302b2b;font-family:Arial, Helvetica, sans-serif;">Thank you<br>Customer Care Department<br>LogoMish</span></td></tr>
        //                     </tbody>
        //                 </table>
        //             </td>
        //             </tr>
        //         </tbody>
        //     </table>';
    
        //     $html_user .= "</body></html>";
        //     $name = "Team LogoMish";
        //     $email_sender = "team@logomish.com";
        //     $subject = "Thank You";
        //     $headers  = "MIME-Version: 1.0\r\n";
        //     $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        //     $headers .= "From: {$name} <{$email_sender}> \n";
    
        //     $body = $html_user;
    
        //    if (mail($email, $subject, $body, $headers)) {
        //             echo "Mail sent.";
        //    }else{
        //     echo "Email Faild.";
        //    }
        // }
    }
}


if(isset($_POST['savelogin'])){
    $servername = DBHOST;
    $username = DBUSER;
    $password = DBPWD;
    $dbname = DBNAME;
    $con = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $email = mysqli_real_escape_string($con, $_POST['user_email']);
    $password = mysqli_real_escape_string($con, $_POST['User_password']);
    $check = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($con, $check);
    if(mysqli_num_rows($res) > 0){
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if(password_verify($password, $fetch_pass)){
            $check = "SELECT = FROM users WHERE unique_id = {$fetch['unique_id']}";
            $res = mysqli_query($con, $check);
            if($res){
                $_SESSION['unique_id'] = $fetch['unique_id'];
                header("Location: index.php");
                // echo "success";
            }
        }else{
            echo "Incorrect!";
            $errors['email'] = "Incorrect email or password!";
        }
    }else{
        echo "NotMember!";
        $errors['email'] = "It's look like you're not yet a member! Click on the top link to signup.";
    }
}
?>