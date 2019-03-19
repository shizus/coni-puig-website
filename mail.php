<?php

    $to = 'hola@conipuig.com.ar';
    $name = $_POST["name"];
    $email= $_POST["email"];
    $text= $_POST["message"];
    $phone = $_POST["phone"];
    $service = $_POST["service"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $message ='<table style="width:100%">
        <tr>
            <td>'.$name.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Phone: '.$phone.'</td></tr>
        <tr><td>Text: '.$text.'</td></tr>
        
    </table>';
    if (mail($to, 'Pedido online de: '.$service, $message, $headers))
    {
        exit('Tu mensaje fue enviado.');
    }else{
        die('Hubo un error en el servidor por favor comunicate por otra vía.');
    }

?>
