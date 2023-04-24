<?php

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$options = $_POST["options"];
$description = $_POST["description"];
if (empty($options)) {
  $options=[];
}
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
  
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'rendaextra.pt@gmail.com';                     //SMTP username
    $mail->Password   = 'fmpohacnmbhuncqs';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'TRABALHO');
    $mail->addAddress('marcelo.santos0799@gmail.com', 'Marcelo');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('from@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $N = count($options);
    $todas=" ";
    if($N>0){
      for($i=0; $i < $N; $i++)
      {

        $todas.=($options[$i] . "<br/> ");
      }
    }
    $mail->isHTML(true);//Set email format to HTML
    $mail->Subject = date("Y/m/d")." ".$name." ".date("h:i:sa");
    $mail->Body    = "<b>Nome:</b> ".$name." <br/> <b>Email:</b> ".$email."<br/><br/> <b>Serviços:</b> ".$todas."<br/><br/> <b>Descrição:</b>".$description;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send(); 

    $referer = $_SERVER['HTTP_REFERER'];
    session_start();
    $_SESSION['success_message'] = "Form submitted successfully.";
    header("Location:$referer");          

} catch (Exception $e) {
    session_start();
    $_SESSION['success_message'] = "Form submitted successfully.";
    header("Location:$referer");

}

?>