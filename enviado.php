<?php
$remitente = $_POST['email'];
$destinatario = 'virsantillan98@hotmail.com.ar';
$asunto = "Asistencia casamiento";
// $mail = $_POST['ProfesorH'];
// $sBCC= $_POST['Correo'];

if (!$_POST){
?>

<?php
}else{


	$cuerpo = "Nombre y apellido: " . $_POST["name"] . "\r\n"
	. "Email: " . $_POST["email"] . "\r\n" . "¿Asiste?" . $_POST["asistencia"] . "\r\n" . "Menú especial: " . $_POST["note"] . "\r\n";


    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \" <".$remitente.">\n";
	$headers .= "Cc: virsantillan98@hotmail.com.ar\n" ;
	// $headers .= "BCC: <$sBCC>\n" ;


	mail($asunto, $cuerpo, $headers);

    include 'confirma.html';
	}

?>
