<?php


if (isset($_POST['submit'])) {
  $name = $_POST['navn'];
  $mailFrom = $_POST['epost'];
  $phone = $_POST['telefon'];
  $message = $_POST['melding'];

  $subject = "Snaustrinda";

  $mailTo = "tiweisse@ntnu.no";

  $header = "From: ".$mailFrom."\r\n";
  $header.= "MIME-Version: 1.0\r\n";
  $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  $header.= "X-Priority: 1\r\n";


  $txt = "Du har mottatt en mail fra ".$name."\n\nTelefon: ".$phone."\n\nMelding: ".$message;


  mail($mailTo, $subject, $txt, $header);
  header("Location: bliMed.html?mailsend");
}

?>
