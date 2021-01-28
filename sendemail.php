<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'phpmailer/vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    session_start();
    $user= $_SESSION['uname'];
    $email= $_SESSION['email'];
    $code= "123123123";//$_SESSION['code'];
    //echo $email;
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'thetechniverse14@gmail.com';                 // SMTP username
    $mail->Password = 'jst4umyKajol@01';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('thetechniverse14@gmail.com', 'Techniverse');
    $mail->addAddress($email, $user);     // Add a recipient
    /*
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
*/
    //Content
    

    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Physiotherapy Website';
    $mail->Body    = 'Dear '.$user.'.<br> Your Order has been placed. Please click link below to verify your order. http://localhost:8080/project/';
    $mail->AltBody = 'Thankyou';

    $mail->send();
    // echo 'A code has been sent to your email. <br>Please Enter the code below';
    // echo "<form method='post' action=''>";
    // echo "<input type='text' name='code' placeholder='Recovery code'>";
    
    // echo "<input type='submit' name='submit' Value='Submit'>";
    // echo "</form>";

    // if (isset($_POST['submit'])) {
    //     $rcode=$_POST['code'];
    //     if($rcode==$code){
    //         header('location:recovery.php');
    //     }
    //     else{
    //         echo "Invalid Code";
    //     }
    // }
    //header('location:./');  
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

