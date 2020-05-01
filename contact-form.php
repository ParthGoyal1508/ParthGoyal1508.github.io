<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $visitor_phone = $_POST['phone'];
  $message = $_POST['message'];
  
  $email_from = 'parthdeoli1508@gmail.com';

  $email_subject = "New Form submission";

  $email_body = "You have received a new message from the user $name with contact no $visitor_phone.\n".
                          "Here is the message:\n $message";
  $to = "parthgoyal1508@ygmail.com";

  $headers = "From: $email_from \r\n";
                        
  $headers .= "Reply-To: $visitor_email \r\n";
                        
  mail($to,$email_subject,$email_body,$headers);

  header("Location: contact-us.html")
?>
