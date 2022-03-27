<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$email = new PHPMailer(true); 
$html = $email->get(); // This gets a standard HTML Template to use as the base of the e-mail.
$title = 'Title for Inside the HTML';
$subject = 'The E-mail Subject';
$html = str_replace('[title]',$title,$html); //Use this to replace the [title] element in my HTML Template with $title.
$html = str_replace('[date]',date("F j, Y g:i A"),$html); // Again, replaces [date] in the HTML Template with the current date and time.
$body = 'Hello My Good Friend,<br>This is just a simple <strong>HTML Message</strong><br><br>Thank you.';
$html = str_replace('[body]',$body,$html); //Add my HTML Message to the HTML Template.

try {
    //Recipients
    $mail->setFrom('fragmentsoffuture@gmail.com', 'FOF');
    $mail->addAddress($row["sniasse@hotmail.com"], $row["Sally"]);     // Add a recipient
    
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $html;
    $mail->AltBody = strip_tags($html,'<br>');
            
    $mail->send();
                
    //Return Success Message
    $rMsg .= '<div class="alert alert-success">
                <strong>Success: </strong> We have e-mailed the warning.</div>';
} catch (Exception $e) {
        $rMsg .= '<div class="alert alert-danger">
                    <strong>Error: </strong> There was an error e-mailing the warning.</div>';
}
?>