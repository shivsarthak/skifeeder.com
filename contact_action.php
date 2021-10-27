<?php
$to = "skifeeder@gmail.com";
$subjects = "Enquiry From SKI Feeder Website";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= "From:  Query Form <skifeeder@gmail.com>" . "\r\n";
$headers .= 'Cc: ' . "\r\n";
				
if(isset($_POST['name']))
{
//echo "<pre>"; print_r ($_POST); die();
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$msg = "
<html>
<head>
<title>Contact Form</title>
</head>
<body>
<h3> Contact Form Details</h3>
<p><strong> Name : </strong>$name</p>
<p><strong> Email : </strong>$email</p>
<p><strong> Phone : </strong>$mobile</p>
<p><strong> Subject : </strong>$subject</p>
<p><strong> Message : </strong>$message</p>
</body>
</html>
";

mail($to,$subjects,$msg,$headers);

header('Location: thank-you.html');
} 

?>