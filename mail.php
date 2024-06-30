<?php
    $to = 'encktemp@gmail.com';
    $fname= $_POST["fname"];
    $phone= $_POST["phone"];
    $email= $_POST["email"];
    $text= $_POST["message"];

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td> </td>
        </tr>
        <tr><td>Nome: '.$fname.'</td></tr>
	<tr><td>Fone: '.$phone.'</td></tr>
        <tr><td>Email: '.$email.'</td></tr>
        
        
    </table>';

    if (@mail($to, $email, $message, $headers))
    {
        echo 'A mensagem foi enviada.';
    }else{
        echo 'O envio falhou';
    }

?>
