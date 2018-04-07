<?php
/**
 * Created by PhpStorm.
 * User: Rakeshkp
 * Date: 24-01-2018
 * Time: 10:11
 */
require_once "../PHPMailer/PHPMailerAutoload.php";
if(isset($_POST["sendmsg"]))
{
echo "hi";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $mob=$_POST["mob"];

    $msgr=$_POST["msg"];


    $admin_mail='rakesh@svastera.com';

   // echo "$name==$email==$mob==$work_type==$msg";














    //html body for email



    $message  = "<html><body>";

    $message .= "<table width='100%' bgcolor='' cellpadding='0' cellspacing='0' border='0'>";

    $message .= "<tr><td>";

    $message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";

    $message .= "<thead>
  <tr height='80'>
  <th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >DOODLE INTERIORS</th>
  </tr>
             </thead>";

    $message .= "<tbody>
           
      
       <tr>
       <td colspan='4' style='padding:15px;'>
       <p style='font-size:20px;'>Hi' ".$name.",</p>
       <hr />
       <p style='font-size:25px;'>THANKS FOR YOUR INTREST WITH US..WE WILL GET BACK TO YOU SHORTLY</p>
        <p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'></p>
       </td>
       </tr>
      
       <tr height='80'>
       <td colspan='4' align='center' style='background-color:lightgrey ; border-top:dashed #00a2d1 2px; font-size:24px; '>
       <label>Doodle Interiors : 
              <a href='https://www.facebook.com/doodleinteriors/' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-facebook-m.png' /></a>
       <a href='' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-twitter-m.png' /></a>
           </label>
       </td>
       </tr>
      
              </tbody>";

    $message .= "</table>";

    $message .= "</td></tr>";
    $message .= "</table>";

    $message .= "</body></html>";





    $mail = new PHPMailer;
    $mail->Host       = "relay-hosting.secureserver.net";
    $mail->Port       = 25;
    $mail->SMTPDebug  = 0;
    $mail->SMTPSecure = "none";
    $mail->SMTPAuth   = false;
    $mail->isHTML(true);
    $mail->Username   = "";
    $mail->Password   = "";



    $mail->setFrom('info@doodleinteriors.com', '');
    $mail->addAddress($email, '');
    $mail->Subject = 'DOODLE INTERIORS';
    $mail->Body = $message;

    // $mail->AddAttachment($_FILES['fileToUpload']['tmp_name'], $_FILES['fileToUpload']['name']);



    if (!$mail->send()) {
        $msg .= "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $msg .= "Message sent!";
    }


//sending toadmin email




    $message1  = "<html><body>";

    $message1 .= "<table width='100%' bgcolor='' cellpadding='0' cellspacing='0' border='0'>";

    $message1 .= "<tr><td>";

    $message1 .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";

    $message1 .= "<thead>
  <tr height='80'>
  <th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >DOODLE INTERIORS</th>
  </tr>
             </thead>";

    $message1 .= "<tbody>
           
      
       <tr>
       <td colspan='4' style='padding:15px;'>
       <p style='font-size:20px;'>Hi' ".$name.",</p>
       <hr />
       <p style='font-size:25px;'>FROM QUOTE REQUEST DOODLEINTERIORS.COM</p>
         <p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'></p>
       </td>
       </tr>
       <tr>
      <td colspan='4' style='padding:15px;'>  <p style='font-size:20px;'>NAME :' ".$name.",</p><p style='font-size:20px;'>EMAIL :' ".$email.",</p>
      <p style='font-size:20px;'>MOBILE :' ".$mob.",</p><p style='font-size:20px;'>MESSAGE :' ".$msgr.",</p>
       <hr />
       <p style='font-size:25px;'>FROM CAREERS DOODLEINTERIORS.COM</p></td></tr>
       <tr height='80'>
       <td colspan='4' align='center' style='background-color:lightgrey ; border-top:dashed #00a2d1 2px; font-size:24px; '>
       <label>Doodle Interiors : 
              <a href='https://www.facebook.com/doodleinteriors/' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-facebook-m.png' /></a>
       <a href='' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-twitter-m.png' /></a>
           </label>
       </td>
       </tr>
      
              </tbody>";

    $message1 .= "</table>";

    $message1 .= "</td></tr>";
    $message1 .= "</table>";

    $message1 .= "</body></html>";




    $mail1 = new PHPMailer;
    $mail1->Host       = "relay-hosting.secureserver.net";
    $mail1->Port       = 25;
    $mail1->SMTPDebug  = 0;
    $mail1->SMTPSecure = "none";
    $mail1->SMTPAuth   = false;
    $mail1->isHTML(true);
    $mail1->Username   = "";
    $mail1->Password   = "";



    $mail1->setFrom('info@doodleinteriors.com', '');
    $mail1->addAddress($admin_mail, '');
    $mail1->Subject = 'doodle interiors get a quote';
    $mail1->Body = $message1;

    //$mail1->AddAttachment($_FILES['fileToUpload']['tmp_name'], $_FILES['fileToUpload']['name']);



    if (!$mail1->send()) {
        $msg .= "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $msg .= "Mailer Error: " . $mail->ErrorInfo;
    }





    echo "<script type='text/javascript'> alert(' THANKS WE WILL GET BACK SHORTLY!');
window.location.href='contact.html';
</script>";
    exit();






}




?>