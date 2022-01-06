<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$number= $_POST['mobile'];
$message= $_POST['message'];

$to = "bigizinduwayo@gmail.com";
 
$subject = "Mail From G&B website";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Mobile = ". $number ."\r\n Message =" . $message;

$headers = "From: noreply@gandb.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>