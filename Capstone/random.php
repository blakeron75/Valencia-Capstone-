<?php

if(isset($_POST['submit'])) {

    $to = "mscreativedesigns@gmail.com"; 
    $subject = "Design Service Inquiry";
    $name_field = $_POST['name'];
    $company_field = $_POST['company'];
    $phone_field = $_POST['phone'];
    $date_field = $_POST['date'];
    $email_field = $_POST['email'];
    $message_field = $_POST['message'];
    
    $body = "From: $name_field
    Company: $company_field
    E-Mail: $email_field
    Phone Number: $phone_field
    Date: $date_field
    Message: $message_field";

    echo "We've recived your contact information $to! We will be in Contact with you shortly!" ;
    
    mail($to, $subject, $body); 
    
//These are the variables for the email

$sendto = $_POST['email']; // this is the email address collected form the form
$ccto = "matt@mscreativedesigns.com"; //you can cc it to yourself
$subject = "email confirmation"; // Subject
$message = "the body of the email - this email is to confirm etc..."
$header = "From: [email]auto-confirm@mscreativedesigns.com[/email]\r\n";

// This is the function to send the email
mail($sendto, $subject, $message, $header);  


} else {
    echo "An error has occured, please email [email]mscreativedesigns@gmail.com[/email] with your ";
}

?>
<script language=javascript>
setTimeout("location.href='index.html'", [3000]);
</script>