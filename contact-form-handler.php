<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Email Us</title>
</head>
<?php
    $name=$_POST['name'];
    $visitor_email=$_POST['email'];
    $message = $_POST['message'];


    $email_from='livingroomcoffee.tk';
    $email_subject="Feedback";
    $email_body="User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";

    $to="livingroomcoffee@yahoo.com";
    $headers="From: $email_from \r\n";
    $headers="Reply-To: $visitor_email \r\n";


    mail($to,$email_subject,$email_body,$headers);
    header("Location: contactus.html");

?>
<body>
</body>
</html>