<?php
$email = $_REQUEST['jobEmail'];
$name = $_REQUEST['jobUserName'];
$number = $_REQUEST['jobNumber'];
$jobId = $_REQUEST['jobId'];
$profileLink = $_REQUEST['jobSocialLink'];

// if (@$_FILES['fileToUploadCV']) {
//   $file_name = time() . $_FILES['fileToUploadCV']['name'];
//   $file_size = $_FILES['fileToUploadCV']['size'];
//   $file_tmp = $_FILES['fileToUploadCV']['tmp_name'];
//   $file_type = $_FILES['fileToUploadCV']['type'];
//   $url = "http://";
//   $url .= $_SERVER['HTTP_HOST'];
//   $url .= $_SERVER['REQUEST_URI'];
//   $count = strpos($url, 'controllers/jobs_form_process.php');
//   $path = substr($url, 0, $count);
//   $fileToUploadCV = $path . 'job-files/' . $file_name;
//   move_uploaded_file($file_tmp, "job-files/" . $file_name);
// }

if (@$_FILES['fileToUploadCV']) {
    $file_name = time() . $_FILES['fileToUploadCV']['name'];
    $file_tmp = $_FILES['fileToUploadCV']['tmp_name'];
    // $file_type = $_FILES['fileToUploadCV']['type'];
    // Destination directory
    $destination_dir = '../job-files/';
    
    // Move the file to the destination directory
    if (move_uploaded_file($file_tmp, $destination_dir . $file_name)) {
        echo "File moved successfully.";
    } else {
        echo "Failed to move file.";
    }
}


$cmessage = $_REQUEST['message'];

$to = "kezya@bettamint.com,divya@bettamint.com";
$subject = "Job Application Filled ";

// Set headers for HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: hello@bettamint.com" . "\r\n";

$html = "
  <h1>Job Application</h1>
  <p>Job Application Was Filled at bettamint.com</p>
  <table style='border-collapse: collapse; font-familty: 'Ariel', sans-serif; ' width='100%'>
      <tr>
          <th colspan='2' style='padding-top: 15px; padding-bottom: 15px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px; font-size: 18px; text-align: center;'>Job Application</th>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Email Address</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$email</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Full Name</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$name</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Phone Number</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$number</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Applied For</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$jobId</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Linkedin</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$profileLink</td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Resume</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>https://bettamint.com/job-files/$file_name </td>
      </tr>
      <tr>
          <th style='padding-top: 12px; padding-bottom: 12px; text-align: left; background-color: #81B734; color: white; border: 1px solid #ddd; padding: 8px;'>Message</th>
          <td style='border: 1px solid #ddd; padding: 8px;'>$cmessage</td>
      </tr>
  
  </table>";


if (mail($to, $subject, $html, $headers)) {
  header("location: ../thankyou.php");
  echo "1";
} else {

  echo "Failed to send email. Please try again later.";
}
