<?php

if (session_status() === PHP_SESSION_NONE) {

    session_start();

}


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    

    // $to = "kezya@bettamint.com,waleed@bettamint.com";

	//$to = "yousuf.ameer@gmail.com";

    $from = $_REQUEST['email'];

    $name = $_REQUEST['name'];

    // $subject = $_REQUEST['subject'];

    $subject = "Job Application";

    $number = $_REQUEST['number'];

	$jobId = $_REQUEST['jobId'];

	$profileLink = $_REQUEST['profileLink'];

	if(@$_FILES['fileToUploadCV']){

	    $file_name = time().$_FILES['fileToUploadCV']['name'];

        $file_size =$_FILES['fileToUploadCV']['size'];

        $file_tmp =$_FILES['fileToUploadCV']['tmp_name'];

        $file_type=$_FILES['fileToUploadCV']['type'];    

     

  

        $url = "http://";

        $url.= $_SERVER['HTTP_HOST'];   

        $url.= $_SERVER['REQUEST_URI'];

        

        $count = strpos($url,'jobs_form_process.php');

        $path = substr($url,0,$count);

        

        $fileToUploadCV = $path.'job-files/'.$file_name;

        move_uploaded_file($file_tmp,"job-files/".$file_name);



	}

// 	$fileToUploadCV = $_REQUEST['fileToUploadCV'];

	

    

	

    $cmessage = $_REQUEST['message'];



//     $headers = "From: $from";

// 	$headers = "From: " . $from . "\r\n";

// 	$headers .= "Reply-To: ". $from . "\r\n";

// 	$headers .= "MIME-Version: 1.0\r\n";

// 	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



    // $subject = "You have a message from your Bitmap Photography.";



    $logo = 'img/logo.png';

    $link = '#';



	$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";

	$body .= "<table  style='border-color: #e7e7e7; width: 100%;  border='1' cellspacing='0' cellpadding='5'>";

	$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";

	$body .= "<a href='{$link}'><img alt="reload" src='{$logo}' alt=''></a><br><br>";

	$body .= "</td></tr></thead><tbody><tr>";

	$body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";

	$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";

	$body .= "</tr>";

	$body .= "<tr><td style='border:none;'><strong>Phone:</strong> {$number}</td></tr>";

	$body .= "<tr><td style='border:none;'><strong>Applied For:</strong> {$jobId}</td></tr>";

	$body .= "<tr><td style='border:none;'><strong>Profile Link:</strong> {$profileLink}</td></tr>";

	$body .= "<tr><td style='border:none;'><strong>Resume Path:</strong> {$fileToUploadCV}</td></tr>";

	

	$body .= "</tbody></table>";

	$body .= "</body></html>";



    // $send = mail($to, $subject, $body, $headers);

                    $sent_from = 'yousuf@bettamint.com';
                    $mail_pass = 'chales0333@!';
                    
                    $mail_host = 'smtp.gmail.com';
                    $mail_port = '465';
                    $mail_smtp_secure = 'SSL';
                    
                
                    
                    $mail = new PHPMailer(true);

                     try {
                        //Server settings
                        
                        $mail->SMTPAuth = true; // authentication enabled
                        $mail->SMTPSecure = $mail_smtp_secure; // secure transfer enabled REQUIRED for Gmail
                        $mail->Host = $mail_host;
                        $mail->Port = $mail_port; // or 587
                        $mail->IsHTML(true);
                        $mail->Username = $sent_from;
                        $mail->Password = $mail_pass;
                        $mail->SMTPAutoTLS = false;
                        
                        //$mail->AddCC('yudhisther@bettamint.com');
                        $mail->AddCC('divya@bettamint.com');
                        $mail->addReplyTo($from);

                        $mail->addAddress('kezya@bettamint.com');
						//$mail->addAddress('yousuf@bettamint.com');
                        $mail->SetFrom($sent_from, 'Bettamint');
                        $mail->Subject = $subject;
                        $mail->Body = "$body";
                        $res = $mail->send();

                    } catch (Exception $e) {
                        $res = false;
                        $result = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                        
                    }
       if($res){

        

        $_SESSION['payment_status'] = true;

        $_SESSION['submittion_msg'] = 'Form submitted successfully';

    }else{

        

        $_SESSION['payment_status'] = false;

        $_SESSION['submittion_msg'] = $result;

    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);



?>