<?php
     $to= 'flavanciaux@gmail.com';
     $subject = 'le sujet';
     $message = 'Bonjour !';
     $headers = 'From: fragmentoffuture@gmail.com' . "\r\n" .
     'Reply-To: fragmentoffuture@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 ?>