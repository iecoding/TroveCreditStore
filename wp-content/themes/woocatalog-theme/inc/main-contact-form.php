<?php
    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/woocatalog-theme/assets/vendor/php-mailer/Exception.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/woocatalog-theme/assets/vendor/php-mailer/PHPMailer.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/woocatalog-theme/assets/vendor/php-mailer/SMTP.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $salesman = trim($_POST["salesman"]);
    $salesman_email = trim($_POST["salesman_email"]);
    $name     = trim($_POST["name"]);
    $name     = str_replace(array("\r","\n"),array(" "," "),$name);
    $phone    = trim($_POST["phone"]);
    $subject  = 'Mensaje Formulario general de contacto [' . $salesman . ']';
    $email    = trim($_POST["email"]);
    $message  = trim($_POST["message"]);

    $message = "
        Mensaje envíado mediante el formulario de contacto: <br />
        Atendido por: " . $salesman . " <br />
        Nombre del cliente: " . $name . " <br />" .
        "Correo: " . $email . " <br />" .
        "Teléfono: " . $phone . " <br />" .
        "<br />" .
        "Mensaje: " . $message .
        " ";

    try {
        //Server settings
        $mail->CharSet = 'UTF-8';
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'mail.vps103022.mylogin.co';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'noresponder@app.veladorascristorey.com';   // SMTP username
        $mail->Password   = '99fwo5LUA)';                          //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('noresponder@app.veladorascristorey.com', 'No Reply');
        $mail->addAddress($salesman_email);               // Name is optional
        $mail->addReplyTo($email, $email);

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $message;
    
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    /* Envio de correo */
} else {
    http_response_code(404);
    die();
}
?>