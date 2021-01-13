<?php
include "index.php";

$connect=mysqli_connect('remotemysql.com:3306','L8EAjRVMNT','nvsuTHJhHZ','L8EAjRVMNT');
$codigoqr=$_POST["msg2"];
$txt="userLoadPC.txt";
if(file_exists($txt)){
header('Location: http://localhost/codigoQRUser.php');
}
// if (isset($_GET["w1"])) {
//     // asignar w1 y w2 a dos variables
//     $lond = $_GET["w1"];
//     $latd = $_GET["w2"];
 
//     // mostrar $phpVar1 y $phpVar2
//     echo '<script> alert("Ubicacion listo")</script>';
// } else {
//     echo '<script> alert("Ubicacion NO")</script>';
// }

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
if($connect!=null && $codigoqr!=null $$ $ipuser!=null){
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

  if($codigoqr!=null){//$NombreDato!=null && $UsuarioDato!=null && $DeparDato!=null && $NaciDato!=null && $CedulaDato!=null){
   guardarDatos($codigoqr,$ipuser,$req,$connect);//$NombreDato,$UsuarioDato,$DeparDato,$NaciDato,$CedulaDato);

   $fh = fopen($txt, "w") or die("Error al crear");
   $texto=$NombreDato.$UsuarioDato.$DeparDato.$NaciDato.$CedulaDato;
   fwrite($fh, $texto);
   fclose($fh);
  }

}else{
  echo'<script> alert("NO Conetado")</script>';
}


function guardarDatos($codigoqr,$ipuser,$req,$connect){
  if(isset($req)){

//   $BBDNombre=$NombreDato;
  $BBDUsuario=$codigoqr;
//   $BBDDepar=$DeparDato;
//   $BBDNaci=$NaciDato;
//   $BBDCedula=$CedulaDato;
  $consulta="INSERT INTO usuario (`nombre`, `usuario`, `cedula`, `correo`, `fecha`) VALUES ('$BBDUsuario','$ipuser', '9', '9', '9')";
    
  
  //$consulta="INSERT INTO `usuario` (`nombre`, `usuario`, `cedula`, `correo`, `fecha`, `hora`) VALUES ('9', '9', '9', '9', '9', '2021-01-08 02:00:00')";
  $ejecutar=mysqli_query($connect,$consulta);

  if($ejecutar){
   echo'<script> alert("Fecha Ingresada")</script>';
   
  }else{
    echo'<script> alert("NO Ingresada")</script>';
  }

  }else{
    echo'<script> alert("hola no")</script>';
  }
}

?>
