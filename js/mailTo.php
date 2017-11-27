<?php

  if (isset($_POST['email']))  {
  
  //Email information
  $admin_email = "maystennisacademy@gmail.com";
  $email_subject = "Tennis inschrijving";

  // Header
  


  // Prive
  $Roepnaam = $_POST['Roepnaam'];
  $Voorletters = $_POST['Voorletters'];
  $Tussenvoegsels = $_POST['Tussenvoegsels'];
  $Achternaam = $_POST['Achternaam'];
  $Gestacht = $_POST['Gestacht'];
  $Geboorte_datum1 = $_POST['Geboorte_datum1'];
  $Geboorte_datum2 = $_POST['Geboorte_datum2'];
  $Geboorte_datum3 = $_POST['Geboorte_datum3'];

  // Adres
  $Adres = $_POST['Adres'];
  $Postcode = $_POST['Postcode'];
  $Woonplaats = $_POST['Woonplaats'];
  $Telefoon_vast = $_POST['Telefoon_vast'];
  $Telefoon_mobiel = $_POST['Telefoon_mobiel'];
  $email = $_POST['email'];

  // Sportieve ervaring
  $Niveau = $_POST['Niveau'];
  $Aantal_jaren_getennist = $_POST['Aantal_jaren_getennist'];
  $Wil_op_les_met = $_POST['Wil_op_les_met'];

  // Beschikbaarheid
  $Maandag = $_POST['Maandag'];
  $Dinsdag = $_POST['Dinsdag'];
  $Woensdag = $_POST['Woensdag'];
  $Donderdag = $_POST['donderdag'];

  // locatie
  $Locatie = $_POST['Locatie'];
  $Lid_van_geuzenveld = $_POST['Lid_van_geuzenveld'];
  $Soort_les = $_POST['Soort_les'];
  $Akkoord = $_POST['Akkoord'];

  $input = "";

  $headers = "From: " . $email . "\r\n";
  $headers .= "Reply-To: ". $email . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

  // Volgorde in e-mail
  $email_message = '<html><body>';
  $email_message .= "<h1>Inschrijfformulier</h1>\n\n";

   function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    // Prive
    $email_message .= "<h3>Prive</h3>";
    $email_message .= "<table><tr>";
    $email_message .= "<td style='float: left'>Roepnaam: </td><td>".clean_string($Roepnaam)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Voorletters: </td><td>".clean_string($Voorletters)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Tussenvoegsels: </td><td>".clean_string($Tussenvoegsels)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Achternaam: </td><td>".clean_string($Achternaam)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Gestacht: </td><td>".clean_string($Gestacht)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Geboorte datum: </td><td>".clean_string($Geboorte_datum1).clean_string($Geboorte_datum2).clean_string($Geboorte_datum3)."</td>";
    $email_message .= "</tr>";

    // Adres
    $email_message .= "<tr><td style='float: left'><h3>Adres</h3></tr></td>";
    $email_message .= "<tr>";
    $email_message .= "<td style='float: left'>Adres: </td><td>".clean_string($Adres)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Postcode: </td><td>".clean_string($Postcode)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Woonplaats: </td><td>".clean_string($Woonplaats)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Telefoon vast: </td><td>".clean_string($Telefoon_vast)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Telefoon mobiel: </td><td>".clean_string($Telefoon_mobiel)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Email: </td><td>".clean_string($email)."</td>";
    $email_message .= "</tr>";

    // Sportieve ervaring
    $email_message .= "<tr><td style='float: left'><h3>Sportieve ervaring</h3></tr></td>";
    $email_message .= "<tr>";
    $email_message .= "<td style='float: left'>Niveau: </td><td>".clean_string($Niveau)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Aantal jaren getennist: </td><td>".clean_string($Aantal_jaren_getennist)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Wil op les met: </td><td>".clean_string($Wil_op_les_met)."</td>";
    $email_message .= "</tr>";

    // Beschikbaarheid
    $email_message .= "<tr><td style='float: left'><h3>Beschikbaarheid</h3></tr></td>";
    $email_message .= "<tr>";
    $email_message .= "<td style='float: left'>Maandag: </td><td>".clean_string($Maandag)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Dinsdag: </td><td>".clean_string($Dinsdag)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Woensdag: </td><td>".clean_string($Woensdag)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Donderdag: </td><td>".clean_string($Donderdag)."</td>";
    $email_message .= "</tr>";

    // Locatie
    $email_message .= "<tr><td style='float: left'><h3>Locatie</h3></tr></td>";
    $email_message .= "<tr>";
    $email_message .= "<td style='float: left'>Locatie: </td><td>".clean_string($Locatie)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Lid van geuzenveld: </td><td>".clean_string($Lid_van_geuzenveld)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Soort les: </td><td>".clean_string($Soort_les)."</td>";
    $email_message .= "</tr><tr>";

    $email_message .= "<td style='float: left'>Ik ga akkoord met de algemene voorwaarden: </td><td>".clean_string($Akkoord)."</td>";
    $email_message .= "</tr></table>";

    $email_message .= '</body></html>';

    $mail=mail($admin_email, $email_subject, $email_message, $headers);
    // if($mail){
    //     echo "Thank you for using our mail form";
    // }else{
    //      echo "Mail sending failed."; 
    // }
    if($mail){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Uw mail is verzonden.')
    window.location.href='../inschrijven.html';
    </SCRIPT>");
    }else{
         echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Er is iets mis gegaan probeer het opnieuw.')
    window.location.href='../inschrijven.html';
    </SCRIPT>"); 
    }
  }
?>