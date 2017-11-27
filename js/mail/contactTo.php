<?php

  if (isset($_POST['email']))  {
  
  //Email information
  $admin_email = "maystennisacademy@gmail.com";
  $email_subject = $_POST['subject'];

  // Prive
  $Naam = $_POST['naam'];
  $email = $_POST['email'];
  $mailer = $_POST['email'];

  $Bericht = $_POST['comment'];

  // if ($Akkoord = $_POST['Akkoord']) {
  //   $Cc_mail = $_POST['email'];
  // };


  $headers = "From: $email\n"; 
    foreach ($_POST['check'] as $value) {
    $value = $mailer;
    $headers .= "Cc: $mailer\n";
};

  // Volgorde in e-mail


   function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    // Prive

    $email_message = "Naam: " .clean_string($Naam)."\n\n";
    $email_message .= clean_string($Bericht)."\n";


    $mail=mail($admin_email, $email_subject, $email_message, $headers);
    if($mail){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Uw mail is verzonden.')
    window.location.href='../../contact.html';
    </SCRIPT>");
    }else{
         echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Er is iets fouts gegaan probeer het opnieuw.')
    window.location.href='../../contact.html';
    </SCRIPT>"); 
    }
  

    //   echo ("<SCRIPT LANGUAGE='JavaScript'>
    // window.alert('Uw mail is verzonden.')
    // window.location.href='index.html';
    // </SCRIPT>");
  }
?>