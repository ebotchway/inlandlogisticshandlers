<?php
if (isset($_POST['submit'])) {
    $to = "info@inlandlogisticshandlers.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fullname = $_POST['fullname'];
    $address = $_POST['address'];
    $subject = "Getting Quote: Using Get Quote form on website";
    $subject2 = "Copy of your form submission";
    $message = $fullname . " from " . $address . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $fullname . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to, $subject, $message, $headers);
    mail($from, $subject2, $message2, $headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: index.php');
}
