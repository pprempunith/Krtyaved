<?php
  $to = 'krtyaved.enquiry@gmail.com';
  $name = $_POST["name"];
  $email= $_POST["email"];
  $message= $_POST["message"];
  $phone_number= $_POST["phone_number"];
  


  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

  $message ='<table style="width:100%">
      <tr>
          <td>'.$name.'</td>
      </tr>
      <tr><td>Email: '.$email.'</td></tr>
      <tr><td>phone_number: '.$phone_number.'</td></tr>
      <tr><td>Text: '.$text.'</td></tr>
      
  </table>';

  if (@mail($to, $email, $message, $headers))
  {
      echo 'The message has been sent.';
  }else{
      echo 'failed';
  }

?>