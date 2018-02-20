/*
/*if(isset($_POST['submit'])){
    $to = "fibrahimb@berkeley.edu"; 
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "Fatima's Website Form Submission";
    $subject2 = "Copy of your form submission";
    $message = $firstname . " " . $lastname . " wrote the following:" . "\n\n" . $_POST['subject'];
    $message2 = "Here is a copy of your message " . $firstname . "\n\n" . $_POST['subject'];
    $headers = 'From: ' . $_POST['firstname'] . ' <fibrahimb@berkeley.edu>' . "\r\n" .
    'Reply-To: fibrahimb@berkeley.edu' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    /*$headers = "From:" . $from;*/
    /*$headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: fatimaibrahimbiangoro.com/contact-thank-you.html');
    exit();
    }*/
if(mail($to,$subject,$message,$headers)) 
{
    echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
} 
Header("location: http://www.fatimaibrahimbiangoro.com");
    exit; 
$first_name = $_POST['firstname']; 
$email = $_POST['email']; 
$message = $_POST['subject']; 
if(isset($_POST['submit']))
{
$from = $_POST['email']; 
$to = "fibrahimb@berkeley.edu"; 
$subject = "Contact Form";
$message = "
Name:$name \n 
Email: $email \n 
Message: $message \n 
$headers = "From: $from \r\n";
$headers .= "Reply-To: $from \r\n";
$headers .= "Return-Path: $from\r\n";
$headers .= "X-Mailer: PHP \r\n";
if(isset($email)){
   echo 'Success! Thanks for submitting';
}

$first_name = $_POST['firstname']; 
$email = $_POST['email']; 
$message = $_POST['subject']; 

if(isset($_POST['submit']))

{
$from = $_POST['email']; 

$to = "fibrahimb@berkeley.edu"; 

$subject = "Contact Form";

$message = "
Name:$name \n 
Email: $email \n 
Message: $message \n 

$headers = "From: $from \r\n";
$headers .= "Reply-To: $from \r\n";
$headers .= "Return-Path: $from\r\n";
$headers .= "X-Mailer: PHP \r\n";


if(mail($to,$subject,$message,$headers)) 
{
    Header("location: http://www.fatimaibrahimbiangoro.com/contact-thank-you");
    exit;
} 
}
*/
        
<?php
if(isset($_POST['country'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "fibrahimb@berkeley.edu";
    $email_subject ="Response from contact form";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['fname']) ||
        !isset($_POST['lname']) ||
        !isset($_POST['country']) ||
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $fname = $_POST['fname']; // required
    $lname = $_POST['lname']; // required
    $country = $_POST['country']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$fname)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$lname)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($fname)."\n";
    $email_message .= "Last Name: ".clean_string($lname)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
header('Location: www.facebook.com'); //Replace email-success.php with the page you want them to be redirected to!
}
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>        
