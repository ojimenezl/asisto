<?php
include "index.php";

$connect=mysqli_connect('remotemysql.com:3306','L8EAjRVMNT','nvsuTHJhHZ','L8EAjRVMNT');
$codigoqr=$_POST["msg2"];
$txt="userLoadPC.txt";
if(file_exists($txt)){
header('Location: http://localhost/codigoQRUser.php');
}

if($connect!=null && $codigoqr!=null){
  echo'<script> alert("Conectado")</script>';

  
  $UsuarioDato=$_POST["dataUsuario"];
  $NombreDato=$_POST["dataNombre"];
  $DeparDato=$_POST["dataDepar"];
  $NaciDato=$_POST["dataNaci"];
  $CedulaDato=$_POST["dataCedula"];
  $req=$_REQUEST['ingresar'];
 
  echo '<script>  alert($UsuarioDato) </script>';
  echo '<script> alert($NombreDato) </script>';
  echo '<script> alert($DeparDato) </script>';
  echo '<script> alert($NaciDato) </script>';
  echo '<script> alert($CedulaDato) </script>';

  if($codigoqr!=null && $NombreDato!=null && $UsuarioDato!=null && $DeparDato!=null && $NaciDato!=null && $CedulaDato!=null){//$NombreDato!=null && $UsuarioDato!=null && $DeparDato!=null && $NaciDato!=null && $CedulaDato!=null){
   guardarDatos($NombreDato,$UsuarioDato,$DeparDato,$NaciDato,$CedulaDato,$req,$connect);//$NombreDato,$UsuarioDato,$DeparDato,$NaciDato,$CedulaDato);

   $fh = fopen($txt, "w") or die("Error al crear");
   $texto=$NombreDato.$UsuarioDato.$DeparDato.$NaciDato.$CedulaDato;
   fwrite($fh, $texto);
   fclose($fh);
  }

}else{
  echo'<script> alert("NO Conetado")</script>';
}


function guardarDatos($codigoqr,$req,$connect){
  if(isset($req)){

  $BBDNombre=$codigoqr;
  $BBDUsuario=$UsuarioDato;
  $BBDDepar=$DeparDato;
  $BBDNaci=$NaciDato;
  $BBDCedula=$CedulaDato;
  //$consulta="INSERT INTO usuario (`nombre`, `usuario`, `cedula`, `correo`, `fecha`) VALUES ('$BBDUsuario','$BBDNombre','$BBDDepar','$BBDCedula','$BBDNaci')";
    
  
  $consulta="INSERT INTO `usuario` (`nombre`, `usuario`, `cedula`, `correo`, `fecha`, `hora`) VALUES ('9', '9', '9', '9', '9', '2021-01-08 02:00:00')";
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
