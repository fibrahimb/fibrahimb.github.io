<?php 
if(isset($_POST['submit'])){
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
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: index/contact-thank-you.html');
    exit();
    }
?>
