<?php

$enquiryType = @$_POST["enquiryType"];

$fName = @$_POST["fName"];
$lName = @$_POST["lName"];
$emailAddress = @$_POST["emailAddress"];
$phoneNumber = @$_POST["phoneNumber"];
$companyType = @$_POST["companyType"];
$companyName = @$_POST["companyName"];
$comments = @$_POST["comments"];


$to = "kezya@bettamint.com,yudhisther@bettamint.com, 0.abdulraffay@gmail.com";

$username = $f_name . $l_name;

$subject = "Contact Form was filled at bettamint.com ";



// Set headers for HTML email

$headers = "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$headers .= "From: hello@bettamint.com" . "\r\n";



$html = "

  <h1>Contact By $username</h1>

  <p>Someone Contacted At bettamint.com</p>

  <table style='border-collapse: collapse; font-familty: 'Ariel', sans-serif; ' width='100%'>

      <tr>

          <th colspan='2' style='padding-top: 15px; padding-bottom: 15px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px; font-size: 18px; text-align: center;'>Contact Information</th>

      </tr>

      <tr>

          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Enquiry Type</th>

          <td style='border: 1px solid #ddd; padding: 8px;'>$enquiryType</td>

      </tr>

      <tr>

          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>First Name</th>

          <td style='border: 1px solid #ddd; padding: 8px;'>$fName</td>

      </tr>

      <tr>

          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Last Name</th>

          <td style='border: 1px solid #ddd; padding: 8px;'>$lName</td>

      </tr>

      <tr>

          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Email Address</th>

          <td style='border: 1px solid #ddd; padding: 8px;'>$emailAddress</td>

      </tr>

      <tr>

          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>phone Number</th>

          <td style='border: 1px solid #ddd; padding: 8px;'>$phoneNumber</td>

      </tr>

      <tr>

          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Company Type</th>

          <td style='border: 1px solid #ddd; padding: 8px;'>$companyType</td>

      </tr>

      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Company Name</th>

          <td style='border: 1px solid #ddd; padding: 8px;'>$companyName</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Comments</th>

          <td style='border: 1px solid #ddd; padding: 8px;'>$comments</td>
      </tr>

  </table>";





if (mail($to, $subject, $html, $headers)) {
  header("location: thankyou.php");
  echo "1";
} else {

  echo "Failed to send email. Please try again later.";
}
