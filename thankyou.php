<!–– Assignment Name: Portfolio 
File Name: thankyou.php 
Date: 5/15/2018 
Programmer: Alexandra Nitsche ––>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="styles/style.css">
<link rel="stylesheet" href="css/style.css">
</head>
    <body>
    <!--/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon*/-->

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>

    <!-- header Include-->
    <?php include('includes/header.php'); ?>

    <!-- Navigation Include-->
    <?php include('includes/nav.php'); ?>
    <main id="main">
    <?php

$dbhost = "localhost";
$dbuser = "thealexa_portfolio_user";
$dbpass = "Portfolio";
$dbname = "thealexa_portfolio";
 
$conn    = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Thank you for your message.";

$name    = $conn->real_escape_string($_POST['name']);
$email    = $conn->real_escape_string($_POST['email']);
$comment = $conn->real_escape_string($_POST['comment']);
$query   = "INSERT INTO portfolio_contacts (name, email, comment) VALUES('" . $name . "','" . $email . "','" . $comment . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
$conn->close();
?> 

<?php
date_default_timezone_set('America/Los_Angeles');

require 'phpmailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "mail.thealexandradesigns.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "questions@thealexandradesigns.com";
//Password to use for SMTP authentication
$mail->Password = "D4ydream2018";
//Set who the message is to be sent from
$mail->setFrom('questions@thealexandradesigns.com', 'Alexandra Nitsche');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('alexandra.nitsche@pcc.edu', 'Alexandra Nitsche');
//Set the subject line
$mail->Subject = 'A Contact from Alexandra Designs';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
$mail->IsHTML(true);
$mail->Body = 'Email:' . $_POST['email'] . '<br>';
$mail->Body .= 'Name:' . $_POST['name'] . '<br>';
$mail->Body .= 'Message:' . $_POST['comment'] . '<br>';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "I look forward to speaking with you soon!";
}

?>
        </main>
    <!-- Footer Include-->
    <?php include('includes/footer.php'); ?>

    <script>
        var elem = document.querySelector('.m-p-g');

        document.addEventListener('DOMContentLoaded', function() {
            var gallery = new MaterialPhotoGallery(elem);
        });

    </script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>

</body>

</html>
