<?php 

include('../config.php');
$servername = DBHOST;
$username = DBUSER;
$password = DBPWD;
$dbname = DBNAME;
$con = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$customer_name  = isset($_POST['customer_name']) ? $_POST['customer_name'] : '';
$customer_email = isset($_POST['customer_email']) ? $_POST['customer_email'] : '';
$phone_number   = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
$msg            = isset($_POST['msg']) ? $_POST['msg'] : '';
$package_id     = isset($_POST['package_id']) ? $_POST['package_id'] : '';
$package_name   = isset($_POST['package_name']) ? $_POST['package_name'] : '';
$package_price  = isset($_POST['package_price']) ? $_POST['package_price'] : '';

// $lead_area      = isset(($con, $_POST['lead_area'])) ? ($con, $_POST['lead_area']) : '';
//--------------------------------------------------------------------------------
    
$insert="INSERT INTO `packagesleads` (`CusName`, `CusEmail`, `CusPhone`, `Description`, `PackId`, `PackName`, `PackPrice`)
VALUES ('{$customer_name}', '{$customer_email}', '{$phone_number}',  '{$msg}', '{$package_id}', '{$package_name}', '{$package_price}')" ; 

if ( mysqli_query($con, $insert) ) {
    //echo "Data Saved!";
} else {
    echo "Data Error!";
    echo $insert;
}
//--------------------------------------------------------------------------------
if ($package_name) {
    $package_name = '<p><b>Package Name: </b>' . $package_name . '</p>';
}
if ($package_price) {
    $package_price = '<p><b>Price: </b>' . $package_price . '</p>';
}
$html_new_customer = '<html><body>';
$html_new_customer .='<table width="650" border="0" align="center" cellpadding="0" cellspacing="0" style="background:#ffffff;border:#80808059 4px solid;">
    <tbody>
        <tr>
            <td align="center" valign="top">
                <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tbody>
                        <tr>
                            <td align="center" valign="top" bgcolor="#131211">
                            <table width="80" border="0" cellspacing="0" cellpadding="0">
                                <tbody>
                                    <tr><td height="10" align="center" valign="top"></td></tr>
                                    <tr><td align="center" valign="top"><img src="https://logomish.com/assets/images/Logomish_icon.png" alt="logomish.com" width="200" height="100"></td></tr>
                                    <tr><td height="10" align="center" valign="top"></td></tr>
                                </tbody>
                            </table>
                            </td>
                            </tr>
                            <tr>
                            <td height="30" align="center" valign="middle" bgcolor="#3772FF" style="width: 70%; margin: 14px auto; border-radius: 20px;display: block;box-shadow: 1px 5px 12px #8080805c;">
                           <span class="mainHead" style="display: block; line-height: 32px; color: white; letter-spacing: 3px; text-transform: uppercase; font-weight: bolder;">LogoMIsh</span>
                            </td>
                            </tr>
                    </tbody>
                </table>
            </td>
            </tr>
            <tr>
            <td width="620" align="center" valign="top">
                <table width="596" border="0" align="center" cellpadding="0" cellspacing="0" style="font:normal 13px Arial, Helvetica, sans-serif;color:#0d0d0d;padding:0px 0;">
                    <tbody>
                        <tr><td height="20" align="center" valign="middle"></td></tr>
                        <tr><td height="20" align="left" valign="middle"></td></tr>
                        <tr><td height="73" align="left" valign="middle">
                            <span style="font-size:13px;color:#302b2b;font-family:Arial, Helvetica, sans-serif; text-transform: capitalize; letter-spacing: 1px; font-weight: 500;">Dear Admin,</span><br><br><p><b>Name: </b>' . $customer_name . '</p><p><b>Email: </b>' . $customer_email . '</p><p><b>Phone: </b>' . $phone_number . '</p><p><b>Brief: </b>' . $msg . '</p><p><b>Package Details: </b></p>' . $package_name .' '.$package_price.'</td></tr>
                        <tr><td height="20" align="left" valign="middle">&nbsp;</td></tr>
                    </tbody>
                </table>
            </td>
            </tr>
            <tr><td align="center" valign="middle"></td></tr>
            <tr><td height="98" valign="middle" bgcolor="" style="background: #80808042;">
            <table width="596" border="0" align="center" cellpadding="0" cellspacing="0" style="font:normal 13px Arial, Helvetica, sans-serif;color:#0d0d0d;padding:0px 0;">
                <tbody>
                    <tr><td width="574" height="73" align="left" valign="middle"><span style="letter-spacing: 1px; font-size:13px;color:#302b2b;font-family:Arial, Helvetica, sans-serif;">Thank you<br>Customer Care Department<br>Logo Mish</span></td></tr>
                </tbody>
            </table>
            </td>
        </tr>
    </tbody>
</table>';
$html_new_customer .= "</body></html>";
                
$name = "Team LogoMish";
$email_sender = "team@logomish.com";
$subject = "Customer Package Lead";
$recipient_email = 'team@logomish.com';
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: {$name} <{$email_sender}> \n";
$body = $html_new_customer;
if( mail($recipient_email, $subject, $body, $headers) ){
    $html_new_customer_c = '<html><body>';
    $html_new_customer_c .='<table width="650" border="0" align="center" cellpadding="0" cellspacing="0" style="background:#ffffff;border:#80808059 4px solid;">
        <tbody>
            <tr>
                <td align="center" valign="top">
                    <table width="650" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td align="center" valign="top" bgcolor="#131211">
                                <table width="80" border="0" cellspacing="0" cellpadding="0">
                                    <tbody>
                                        <tr><td height="10" align="center" valign="top"></td></tr>
                                        <tr><td align="center" valign="top"><img src="https://logomish.com/assets/images/Logomish_icon.png" alt="logomish.com" width="200" height="100"></td></tr>
                                        <tr><td height="10" align="center" valign="top"></td></tr>
                                    </tbody>
                                </table>
                                </td>
                                </tr>
                                <tr>
                                <td height="30" align="center" valign="middle" bgcolor="#3772FF" style="width: 70%; margin: 14px auto; border-radius: 20px;display: block;box-shadow: 1px 5px 12px #8080805c;">
                                <span class="mainHead" style="display: block; line-height: 32px; color: white; letter-spacing: 3px; text-transform: uppercase; font-weight: bolder;">LogoMIsh</span>
                                </td>
                                </tr>
                        </tbody>
                    </table>
                </td>
                </tr>
                <tr>
                <td width="620" height="259" align="center" valign="top">
                    <table width="596" border="0" align="center" cellpadding="0" cellspacing="0" style="font:normal 13px Arial, Helvetica, sans-serif;color:#0d0d0d;padding:0px 0;">
                        <tbody>
                            <tr><td height="20" align="center" valign="middle"></td></tr>
                            <tr><td height="20" align="left" valign="middle"></td></tr>
                            <tr><td height="73" align="left" valign="middle">
                                <span style="font-size:13px;color:#302b2b;font-family:Arial, Helvetica, sans-serif; text-transform: capitalize; letter-spacing: 1px; font-weight: 500;">Dear '.$customer_name.',</span>
                                <p style="letter-spacing: 1px;text-transform: capitalize;line-height: 22px;font-weight: 300;">Thank you submitting your information for starting a project with LogoMish. Our team will get back to you shortly.</p>
                                </td></tr>
                            <tr><td height="20" align="left" valign="middle">&nbsp;</td></tr>
                        </tbody>
                    </table>
                </td>
                </tr>
                <tr><td align="center" valign="middle"></td></tr>
                <tr><td height="98" valign="middle" bgcolor="" style="background: #80808042;">
                <table width="596" border="0" align="center" cellpadding="0" cellspacing="0" style="font:normal 13px Arial, Helvetica, sans-serif;color:#0d0d0d;padding:0px 0;">
                    <tbody>
                        <tr><td width="574" height="73" align="left" valign="middle"><span style="letter-spacing: 1px; font-size:13px;color:#302b2b;font-family:Arial, Helvetica, sans-serif;">Thank you<br>Customer Care Department<br>LogoMish</span></td></tr>
                    </tbody>
                </table>
                </td>
            </tr>
        </tbody>
    </table>';

    $html_new_customer_c .= "</body></html>";

    $name = "Team LogoMish";
    $email_sender = "team@logomish.com";
    $subject_1 = "Thank You";
    $headers_1  = "MIME-Version: 1.0\r\n";
    $headers_1 .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $headers_1 .= "From: {$name} <{$email_sender}> \n";

    $body_1 = $html_new_customer_c;

    mail($customer_email, $subject_1, $body_1, $headers_1);
} 
?>

<script>
    window.location = 'https://www.logomish.com/thankyouOrder.php';
</script>
<?php
    // $con = close();
?>
<style>
    .mainHead{}
</style>