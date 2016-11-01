<?php 

$sendto   = "sales@defohost.com";
$username = $_POST['name'];   
$usertel = $_POST['telephone']; 
$usermail = $_POST['email']; 
$userdomain = $_POST['domain']; 
$userdomain2 = $_POST['domain2']; 

// Ð¤Ð¾Ñ€Ð¼Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ðµ Ð·Ð°Ð³Ð¾Ð»Ð¾Ð²ÐºÐ° Ð¿Ð¸ÑÑŒÐ¼Ð°
$subject  = "New message";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Ð¤Ð¾Ñ€Ð¼Ð¸Ñ€Ð¾Ð²Ð°Ð½Ð¸Ðµ Ñ‚ÐµÐ»Ð° Ð¿Ð¸ÑÑŒÐ¼Ð°
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>A message rom the website</h2>\r\n";
$msg .= "<p><strong>From whome:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>phone:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>domain:</strong> ".$userdomain."</p>\r\n";
$msg .= "<p><strong>domain2:</strong> ".$userdomain2."</p>\r\n";
$msg .= "</body></html>";

// Ð¾Ñ‚Ð¿Ñ€Ð°Ð²ÐºÐ° ÑÐ¾Ð¾Ð±Ñ‰ÐµÐ½Ð¸Ñ
if(@mail($sendto, $subject, $msg, $headers)) {
header( 'Location: https://www.liqpay.com/api/3/checkout?data=eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJwdWJsaWNfa2V5IjoiaTI2MDk5NDEzMTA1IiwiYW1vdW50IjoiNDkiLCJjdXJyZW5jeSI6IlVTRCIsImRlc2NyaXB0aW9uIjoi0JfQsNGJ0LjRgtCwINGB0LXRgNCy0LXRgNCwLiDQn9GA0L7QutGB0LguINCc0LXRgdGP0YYuIiwidHlwZSI6ImJ1eSIsInNlcnZlcl91cmwiOiJkZWZvaG9zdC5jb20vcnVzc2lhbi8iLCJsYW5ndWFnZSI6InJ1In0%3D&signature=rFh4wpjTgUwajbPLB9fYkj40IxM%3D');
} else {
	echo "<center><img src='images/ne-otpravleno.png'></center>";
}

?>