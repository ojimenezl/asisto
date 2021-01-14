<?php
include "index.php";

$connect=mysqli_connect('remotemysql.com:3306','L8EAjRVMNT','nvsuTHJhHZ','L8EAjRVMNT');
if($connect!=null ){
validarip($connect)
}
$codigoqr=$_POST["msg2"];

$lond = $_POST["ubilat"];
$latd = $_POST["ubilon"];
$txt="userLoadPC.txt";

//si



//no




 function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
$ipuser=get_client_ip();


function validarip($connect){
 $pru="hola";
// $ipuser=get_client_ip();
// $ipres=buscarDatos($ipuser,$connect);
// if($ipres!=null){
// header('Location: https://asisto.herokuapp.com/codigoQRUser.php');
// }else{
// header('Location: https://asisto.herokuapp.com/');
// }
}



if($connect!=null ){
  echo'<script> alert("Conectado")</script>';

//   $UsuarioDato=$codigoqr;
//   $UsuarioDato=$_POST["dataUsuario"];
//   $NombreDato=$_POST["dataNombre"];
//   $DeparDato=$_POST["dataDepar"];
//   $NaciDato=$_POST["dataNaci"];
//   $CedulaDato=$_POST["dataCedula"];
   $req=$_REQUEST['ingresar'];
  //echo '<script>  alert($codigoqr) </script>';
  //echo '<script>  alert($UsuarioDato) </script>';
//   echo '<script> alert($NombreDato) </script>';
//   echo '<script> alert($DeparDato) </script>';
//   echo '<script> alert($NaciDato) </script>';
//   echo '<script> alert($CedulaDato) </script>';

  if($codigoqr!=null && $ipuser!=null && $lond!=null && $latd!=null){//$NombreDato!=null && $UsuarioDato!=null && $DeparDato!=null && $NaciDato!=null && $CedulaDato!=null){
   
   guardarDatos($codigoqr,$ipuser,$lond,$latd,$req,$connect);//$NombreDato,$UsuarioDato,$DeparDato,$NaciDato,$CedulaDato);

   $fh = fopen($txt, "w") or die("Error al crear");
   $texto=$NombreDato.$UsuarioDato.$DeparDato.$NaciDato.$CedulaDato;
   fwrite($fh, $texto);
   fclose($fh);
  }else{
  echo'<script> alert("Faltan datos, no hemos podido registrar tu asistencia. Prueba de nuevo.")</script>';
}

}else{
  echo'<script> alert("NO Conetado")</script>';
}


function guardarDatos($codigoqr,$ipuser,$lond,$latd,$req,$connect){
  if(isset($req)){

//   $BBDNombre=$NombreDato;
  $BBDUsuario=$codigoqr;
  $BBDDepar=$ipuser;
  $BBDNaci=$lond;
  $BBDCedula=$latd;
  $consulta="INSERT INTO usuario (`nombre`, `usuario`, `cedula`, `correo`, `fecha`) VALUES ('$BBDUsuario','$BBDDepar', '$BBDNaci', '$BBDCedula', '9')";
    
  
  //$consulta="INSERT INTO `usuario` (`nombre`, `usuario`, `cedula`, `correo`, `fecha`, `hora`) VALUES ('9', '9', '9', '9', '9', '2021-01-08 02:00:00')";
  $ejecutar=mysqli_query($connect,$consulta);

  if($ejecutar){
   echo'<script> alert("Tu asistencia se a guardado con éxito!!")</script>';
   
  }else{
    echo'<script> alert("NO Ingresada")</script>';
  }

  }else{
    echo'<script> alert("NO Ingresada")</script>';
  }
}
function buscarDatos($ipuser,$connect){
$BBDDepar=$ipuser;
$consulta="SELECT `usuario` FROM `usuario` WHERE `usuario`= '190.152.46.82'"
$ejecutar=mysqli_query($connect,$consulta);
return $ejecutar;
?>
