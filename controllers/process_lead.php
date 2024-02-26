<?php
$f_name = @$_POST["firstName"];
$l_name = @$_POST["lastName"];
$account_type = @$_POST["accountType"];
$scope_of_work =  @$_POST["scopeOfWorkValue"];
$company = @$_POST["company"];
$email = @$_POST["email"];
$number = @$_POST["number"];
$to = "kezya@bettamint.com , yousuf.ameer@gmail.com";
$username = $f_name . $l_name;


$subject = "Lead was filled at bettamint.com ";
// Set headers for HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: hello@bettamint.com" . "\r\n";
$html = "
  <h1>Lead Filled</h1>
  <p>A Lead Was Filled At bettamint.com</p>
  <table style='border-collapse: collapse; font-familty: 'Ariel', sans-serif; ' width='100%'>
      <tr>
          <th colspan='2' style='padding-top: 15px; padding-bottom: 15px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px; font-size: 18px; text-align: center;'>Lead Information</th>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>First Name</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$f_name</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Last Name</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$l_name</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Account Type</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$account_type</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Scope Of Work</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$scope_of_work</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Company Name</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$company</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Email</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$email</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Phone Number</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$number</td>
      </tr>
  </table>";
if (mail($to, $subject, $html, $headers)) {
    echo "1";
} else {
    echo "Failed to send email. Please try again later.";
}
