<?php
// if (isset($_POST['submit'])) {
//   // code...
//   $to="roy797550@gmail.com";
//   $from=$_POST['email'];
//   $first_name=$_POST['firstname'];
//   $subject="From Submission";
//   $message=$first_name. " " . " wrote the following:" . "\n\n" . $_POST['message'];
//
//   $headers="From:" . $from;
//   $headers2="To:" . $to;
//   mail($to,$subject,$message,$headers);
//   echo "Email sent";
// }else{
//   echo "Invaid Details, Please refill the form and submit again."
// }

if ($_POST['submit']) {
  // code...
  $recipient="roy797550@gmail.com";
  $subject="Message from portfolio site";
  $sender=$_POST["firstname"];
  $sender_email=$_POST["email"];
  $message=$_POST["message"];

  $mail_body="Name:". $sender."\nEmail:". $sender_email."\n\n".$message;

  mail($recipient, $subject, $mail_body, "From: $sender <$sender_email>");

  $thankyou="<p>Thankyou! Your message has been sent.</p>";
}
 ?>
