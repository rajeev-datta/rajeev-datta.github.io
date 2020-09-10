<?php
  $name = $_POST['name'];
  $last_name = $_POST['last name'];
  $visitor_email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];
  ?>
  
<?php
  function IsInjected($str)
  {
    $injections = 
  array('(\n+)',
          '(\r+)',
          '(\t+)',
          '(%0A+)',
          '(%0D+)',
          '(%08+)',
          '(%09+)'
          );
    $inject = join('|',
  $injections);
    $inject = "/$inject/i";
    
  if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return fale;
    }
    
  }
  
  if{IsInjected(visitor_email))
  {
  
    echo "Bad email value";
    exit;
    
  }
  ?>
  
<?php
  $email_from = 'rdatta@caltech.edu';
  $email_subject = "New Form submission";
  $email_body = "You have received a new message from the user $name $last_name with the phone number $phone. \n".
  "Here is the message: \n $message".
  ?>
  
<?php
  $to = "rdatta@caltech.edu"
  $headers = "From: email_from \r\n"
  $headers .="Reply-To: $visitor_email \r\n";
  
  mail($to.$email_subject,$email_body,$headers);
  ?>







