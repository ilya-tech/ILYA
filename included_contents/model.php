<?php
  require 'vendor/autoload.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  function sendmail($name, $firstname, $usermail, $motivation, $cv) { //envoyer mail depuis la boite mail créé sur votre hebergeur
    $mail = new PHPMailer;
    $mail->setFrom('noreply.please@ralyse.com', 'Candidature_ilya');
    $mail->addAddress('yoann.mourot@outlook.fr');
    $mail->Subject = "candidature emploi $name $firstname";
    $mail->Body = "$name $firstname\r\nMail : $usermail\r\n\r\nlettre de motivation :\r\n  $motivation";
    $mail->AddAttachment($cv['tmp_name'], $cv['name']);
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo '<h6 style="color:green;">votre candidature a bien été envoyée.</h6>';
    }
  }

  function checkcv($cv) {
    $target_file = basename($cv["name"]);
    $uploadOk = 1;
    // Allow certain file formats
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    if($imageFileType != "docx" && $imageFileType != "odt" && $imageFileType != "pdf") {
      echo '<h6 style="color:red;">Votre CV doit être au format .docx, .odt ou .pdf</h6>';
      $uploadOk = 0;
    }
    //check file size
    if ($cv["size"] > 500000) {
      echo '<h6 style="color:red;">Sorry, your file is too large.</h6>';
      $uploadOk = 0;
    }
    return $uploadOk;
  }
?>
