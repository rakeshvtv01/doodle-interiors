<?php
/**
 * Created by PhpStorm.
 * User: Rakeshkp
 * Date: 24-01-2018
 * Time: 13:09
 */


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
       <p style='font-size:25px;'>FROM CAREERS DOODLEINTERIORS.COM</p>
       <img src='images/logo%20plain%202_edited.jpg'  alt='Sending HTML eMail using PHPMailer in PHP' title='Sending HTML eMail using PHPMailer in PHP' style='height:80%; width:30%; max-width:100%;' />
       <p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'></p>
       </td>
       </tr>
       <tr>
      <td colspan='4' style='padding:15px;'>  <p style='font-size:20px;'>NAME :' ".$name.",</p><p style='font-size:20px;'>EMAIL :' ".$email.",</p>
      <p style='font-size:20px;'>MOBILE :' ".$mob.",</p><p style='font-size:20px;'>MESSAGE :' ".$msg.",</p>
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




echo "$message1";
?>