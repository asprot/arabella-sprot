

<?php
 
 // if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response']))
 // {
      // $secret = '0xEa74500a88F693fE39dfe4e5c9867759fe877BCD';
      //  $verifyResponse = file_get_contents('https://hcaptcha.com/siteverify?secret='.$secret.'&response='.$_POST['h-captcha-response'].'&remoteip='.$_SERVER['REMOTE_ADDR']);
       // $responseData = json_decode($verifyResponse);
      //if($responseData->success)
      //  {
            $succMsg = 'Your request have submitted successfully.';
          

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "arabella.sprot@gmail.com";
$subject = "Website - Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
          echo 'success';
   
      //  }
       // else
      //  {
        //    $errMsg = 'Robot verification failed, please try again.';
       //   echo 'fail';
       // }
  // }
?>