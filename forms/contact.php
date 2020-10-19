
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  <<?php
  $receiving_email_address = 'hr@kaspr.in';

   if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
     include( $php_email_form );
   } else {
     die( 'Unable to load the "PHP Email Form" Library!');
   }

   $contact = new PHP_Email_Form;
   $contact->ajax = true;

   $contact->to = $receiving_email_address;
   $contact->from_name = $_POST['name'];
   $contact->from_email = $_POST['email'];
   $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials

  $contact->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );


   $contact->add_message( $_POST['name'], 'From');
   $contact->add_message( $_POST['email'], 'Email');
   $contact->add_message( $_POST['message'], 'Message', 10);

   echo $contact->send();




// $name=$_POST['name'];
// $subject=$_POST['subject'];
// $email=$_POST['email'];
// $headers = "From: ".$email;


// if(empty($name) || empty($email) || empty($subject) || empty($message))
// {
//   echo "Please fill all the fields";
// }

// else{
  // mail("hr@kaspr.in",$subject,$headers);
  //echo "<script type='text/javascript'>alert('your message sent successfully')</script>";
//}

  // if(isset($_POST['submit'])) {
  //   $name=$_POST['name'];
  //   $subject=$_POST['subject'];
  //   $email=$_POST['email'];
  //   $message=$_POST['message'];

  //  $mailTo = "ishanwen300@gmail.com";
  //  $headers = "From: ".$mailfrom;
  //  $txt = "you have received an e-mail from ".$name.".\n\n".$message;


  //   mail( $mailTo, $subject, $txt, $headers);
  //   header("Location: index.html?mailsend");


?>
