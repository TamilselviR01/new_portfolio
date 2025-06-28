<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "tamilrsekar2002@gmail.com"; // Change this to your email
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $subject = htmlspecialchars($_POST['subject']);
  $message = htmlspecialchars($_POST['message']);

  $headers = "From: $name <$email>\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  $fullMessage = "You have received a message from your portfolio contact form:\n\n";
  $fullMessage .= "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message\n";

  if (mail($to, $subject, $fullMessage, $headers)) {
    echo "<script>alert('Message sent successfully!'); window.history.back();</script>";
  } else {
    echo "<script>alert('Failed to send message.'); window.history.back();</script>";
  }
}
?>
