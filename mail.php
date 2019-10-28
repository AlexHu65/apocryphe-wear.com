<?php

if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest'))
{

  $DEBUG = false;

  // Define direcciones de correo destino
  $emaildestino = "contacto@apocryphe.com.mx";

  // Define direcciones de correo oculto
  $emailoculta  = "alejandro@difraxion.com";

  // Obtiene variables del formulario
  $nombre     = trim( $_POST['nombre']);
  $email     	= trim( $_POST['email']);
  $comentario = trim( $_POST['comentario']);
  $telefono = trim( $_POST['telefono']);

  // Define Nombre del cliente
  $nombrecliente = "Apocryphe Wear";
  $nombrecliente = utf8_encode( html_entity_decode( $nombrecliente ) );

  // Define Nombre del formulario
  $nombreformulario = "de contacto";
  $nombreformulario = utf8_encode( html_entity_decode( $nombreformulario ) );

  // Muestra Valores recibidos si esta Habilitada Variable Debug
  if ( $DEBUG )
  {
    echo "STR_nombre = $nombre<br>";
    echo "STR_email = $correo<br>";
    echo "STR_comentarios = $mensaje<br>";
  }

  // Arma el Mensaje
  $from 		= 'contacto@apocryphe.com.mx';
  $para       = $emaildestino;
  $oculta     = $emailoculta;
  $tema       = "$nombrecliente - Formulario $nombreformulario";
  $cabeceras  = "MIME-Version: 1.0\r\n";
  $cabeceras .= "Content-type: text/html; charset=utf-8\r\n";
  $cabeceras .= "Content-Transfer-Encoding: base64\r\n";
  $cabeceras .= "From: Formulario $nombreformulario <$from>\nReply-To:$from\nX-Mailer: PHP/".phpversion( )."\r\n";
  $cabeceras .= "Bcc: $oculta";
  $cuerpo = '
  <table width="600" style="background-color:#FFFFFF;padding:0;margin:15px auto;" cellspading="0" cellspacing="0" border="0">
  <tbody>
  <tr>
  <td align="center" style="padding:25px 0;background-color:black;border-bottom:#fff solid 1px;"><img src="http://apocryphe.com.mx/assets/img/logo.png" width="200"></td>
  </tr>
  <tr>

  <td>
  <div style="overflow:hidden;width:600px;height:30px;">

  <div style="width:610px;height:32px;margin-left:-5px;box-shadow:inset 0px 5px 5px 1px #c0c0c0;"></div>
  </div>
  </td>
  </tr>
  <tr>
  <td style="padding:20px 36px 40px 36px;color:#4e4e4e;">
  <h3 style="font-size:20px;font-family:arial,verdana,tahoma,sans-serif;font-weight:normal;color:#1a2e3b;text-align:center;margin:20px 0;">Formulario de Confirmación</h3>
  <br />
  <hr />
  <table cellpadding="5">
  <tr><td width="200">Nombre:</td><td>'.$nombre.'</td></tr>
  <tr><td width="200">Correo Electrónico:</td><td>'.$email.'</td></tr>
  <tr><td width="200">Teléfono:</td><td>'.$telefono.'</td></tr>
  <tr><td width="200">Mensaje:</td><td>'.$comentario.'</td></tr>
  </table>
  <br />
  </td>
  </tr>
  <tr>
  <td style="background-color:black;padding:10px;text-align:center;border-radius:0 0 4px 4px;color:white;">
  Copyright 2016 Todos los derechos reservados por Transportistas Coordinados de León S.A. de C.V
  </td>
  </tr>
  </tbody>
  </table>';
  $base64contents = rtrim( chunk_split( base64_encode( $cuerpo ) ) );

  ini_set( 'sendmail_from', $from );

  if(mail( $para, $tema, $base64contents, $cabeceras )){
    echo json_encode(array('estatus'=>'success', 'msg' => 'Formulario enviado, gracias por compartir tu opinión.'));
  }else{
    echo json_encode(array('estatus'=>'error', 'msg' => 'Hubo un problema, por favor recarga la página y vuelve a intentar.'));
  }
}
else
{

}
?>
