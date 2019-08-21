<?php
    if(isset($_POST['email'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];
      $formcontent="From: $name n Message: $message";
      $recipient = "dipinrajc@gmail.com";//noreply@cftech.in
      $subject = $_POST['subject'];
      $mailheader = "From: $email";
      echo "Thank You!";
      if(mail($recipient, $subject, $message, $mailheader)) {
          alert("Thank you for contacting us, $message. You will get a reply within 24 hours");
      }
      header('Location: /');
    }
?>