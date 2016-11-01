<!DOCTYPE html>
<html>
<head>
<meta charset="ANSI">
<title>1 web site</title>
<meta http-equiv="Refresh" content="4; URL=http://127.0.0.1/rinjani-v2.1/1-rinjani-single-image/"> 
</head>
<body>

<?php 

$sendto   = "sales@defohost.com";
$username = $_POST['name'];   
$usertel = $_POST['telephone']; 
$usermail = $_POST['email']; 
$userdomain = $_POST['domain']; 

// Формирование заголовка письма
$subject  = "New message";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>A message rom the website</h2>\r\n";
$msg .= "<p><strong>From whome:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>phone:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>domain:</strong> ".$userdomain."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
����echo "<meta http-equiv="refresh" content="1;url=http://example.com">";
} else {
����echo "<center><img src='images/ne-tpravleno.png'></center>";
}
</body>
</html>