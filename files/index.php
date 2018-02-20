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
?>
