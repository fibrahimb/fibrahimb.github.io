<?php 
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
/*
if(mail($to,$subject,$message,$headers)) 
{
    echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
} 
Header("location: http://www.fatimaibrahimbiangoro.com/contact-thank-you");
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
}
*/
if(isset($_POST['email'])) {

$email_to = "fibrahimb@berkeley.edu";
$email_subject = "subject line here";


function died($error) {
echo "We're sorry, but there's errors found with the form you submitted.<br /><br />";
echo $error."<br /><br />";
echo "Please go back and fix these errors.<br /><br />";
die();
}

if(!isset($_POST['email'])) {
died('We are sorry, but there appears to be a problem with the form you submitted.');       
}

$email_from = $_POST['email']; 
$color = $_POST['color'];
$sizes = $_POST['sizes'];


$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
if(!preg_match($email_exp,$email_from)) {
$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
}

if(strlen($error_message) > 0) {
died($error_message);
}
$email_message = "Form details:\n\n";

function clean_string($string) {
$bad = array("content-type","bcc:","to:","cc:","href");
return str_replace($bad,"",$string);
}

$email_message .= "Email: ".clean_string($email_from)."\n";
$email_message .= "Size: ".clean_string($sizes)."\n";
$email_message .= "Color: ".clean_string($color)."\n";



// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<?php
}
die();
?>
