<?php include_once("index.html");
if (isset($_POST['submit'])) {
  print_r($_POST);
  $nom=$_POST['nom'];
  $email=$_POST['mail'];
  $message=$_POST['message'];


  $to = "david.thewissen@gmail.com";
  $message = "Nom: ".$_POST['nom']."\r\n";
  $message .= 'E-mail: '.$_POST['mail']."\r\n";
  $message .= "Message: \r\n\r\n\r\n" .$_POST['message']."\r\n\r\n--\r\n\r\n";
  $headers = 'From: client@example.com' . "\r\n" .
  'Reply-To: client@example.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
}
 ?>
