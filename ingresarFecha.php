<?php
include "index.php";

$connect=mysqli_connect('remotemysql.com:3306','L8EAjRVMNT','nvsuTHJhHZ','L8EAjRVMNT');

// if($connect!=null ){
// validarip($connect);
// }

$codigoqr=$_POST["msg2"];

$lond = $_POST["ubilat"];
$latd = $_POST["ubilon"];
$stog = $_POST["storagel"];
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
//$ipuser=get_client_ip();


// function validarip($connect){
//  $pru="hola";
// $ipuser=get_client_ip();
// $ipres=buscarDatos($ipuser,$connect);
// if($ipres!=null){
// header('Location: https://asisto.herokuapp.com/codigoQRUser.php');
// }else{
// header('Location: https://asisto.herokuapp.com/');
// }

// }



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

  if($codigoqr!=null && $stog!=null && $lond!=null && $latd!=null){//$NombreDato!=null && $UsuarioDato!=null && $DeparDato!=null && $NaciDato!=null && $CedulaDato!=null){
   
   guardarDatos($codigoqr,$stog,$lond,$latd,$req,$connect);//$NombreDato,$UsuarioDato,$DeparDato,$NaciDato,$CedulaDato);

   $fh = fopen('archivo.txt', "w") or die("Error al crear");
   $texto=$NombreDato.$UsuarioDato.$DeparDato.$NaciDato.$CedulaDato;
   fwrite($fh, $texto);
   fclose($fh);
  // $nombre_fichero = '/path/to/foo.txt';

//    if (file_exists($fh)) {
//        echo'<script> alert("El fichero - '.$fh.' - existe")</script>';
//    } else {
//        echo'<script> alert("El fichero NO - '.$fh.' - existe")</script>';
//    }
  }else{
  echo'<script> alert("Faltan datos, no hemos podido registrar tu asistencia. Prueba de nuevo.")</script>';
   header("Location: https://asisto.herokuapp.com/");
  
//    header('Location: [https://asisto.herokuapp.com/')];
}

}else{
  echo'<script> alert("NO Conetado")</script>';
}

// function consultaip($ipuser,$req,$connect){
//  if(isset($req)){
//   $BBDip=$ipuser;
//   $consultaip="SELECT `nombre` FROM `registro` WHERE `ipuser`= '$BBDip'";
//   $ejecutar=mysqli_query($connect,$consulta);
//   if($ejecutar){
//      $acumulador="OSCAR";
//      echo'<script> alert("Tu asistencia '.$acumulador.' se a guardado con éxito!!")</script>';

//     }else{
//       echo'<script> alert("NO Ingresada2")</script>';
//     }

//    }else{
//     echo'<script> alert("NO IP")</script>';
//   }

// }



function guardarDatos($codigoqr,$stog,$lond,$latd,$req,$connect){
  if(isset($req)){
 echo'<script> alert(" éxito!!")</script>';
//   $BBDNombre=$NombreDato;
  $BBD=$codigoqr;
  $palabras = explode (" ", $BBD);
  $BBDUsuario=$palabras[0];
  $BBDDep=$palabras[1];
  $BBDDCedula=$palabras[2]; 
  $BBDDIp=$stog;
  $BBDLond=$lond;
  $BBDLatd=$latd;
  $insertaruser="INSERT INTO `usuario`(`nombre`, `cedula`, `departamento`, `ipuser`) VALUES ('$BBDUsuario','$BBDDCedula','$BBDDep','$BBDDIp')";
  $consultaip="SELECT `nombre` FROM `usuario` WHERE `ipuser`= '$BBDDIp'  limit 1";
 
  $ejecutar2=mysqli_query($connect,$consultaip);
  $mostrar=mysqli_fetch_array($ejecutar2);
  $acumulador=$mostrar['nombre'];
//   echo'<script> alert("AQUIIII - '.$acumulador.' -  se a guardado con éxito!!")</script>';
   if( $acumulador ){
     $consulta="INSERT INTO `registro`(`nombre`, `cedula`, `departamento`, `ipuser`, `latitud`, `longitud`) VALUES ('$acumulador','$BBDDCedula','$BBDDep','$BBDDIp', '$BBDLond', '$BBDLatd')";
     $ejecutar=mysqli_query($connect,$consulta);
     if($ejecutar){
     $acumulador=$mostrar['nombre'];
     echo'<script> alert("Tu asistencia - '.$acumulador.' -  se a guardado con éxito!!")</script>';
     }else{
      echo'<script> alert("No se a guardado su asistencia usuario!!")</script>';
     }
    
    
    
   }else{
    $ejecutar3=mysqli_query($connect,$insertaruser);
    if($ejecutar3){
//      $consulta="INSERT INTO `registro`(`nombre`, `cedula`, `departamento`, `ipuser`, `latitud`, `longitud`) VALUES ('$acumulador','$BBDDCedula','$BBDDep','$BBDDIp', '$BBDLond', '$BBDLatd')";
     $ejecutar2=mysqli_query($connect,$consultaip);
     $mostrar=mysqli_fetch_array($ejecutar2);
     $acumulador=$mostrar['nombre'];
     if($acumulador){
     echo'<script> alert("Tu asistencia '.$acumulador.' se a guardado con éxito nuevo!!")</script>';
     }else{
      echo'<script> alert("No se a guardado su asistencia!!")</script>';
     }
     
     
    
    }else{
    echo'<script> alert("No se ha podigo guardar su dato!!")</script>';
    }
    
   }
  // '.$ejecutar2.' $consulta="INSERT INTO `usuario` (`nombre`, `usuario`, `cedula`, `correo`, `fecha`, `hora`) VALUES ('9', '9', '9', '9', '9', '2021-01-08 02:00:00')";
 
 
//     if($ejecutar && $ejecutar2){
//      $acumulador="OSCAR";
//      echo'<script> alert("Tu asistencia  se a guardado con éxito!!")</script>';
//     }else{
     
//       echo'<script> alert("NO Ingresada2")</script>';
//     }

  }else{
    echo'<script> alert("NO Ingresada")</script>';
  }
}
// function buscarDatos($ipuser,$connect){
// $BBDDepar=$ipuser;
// $consulta="SELECT `usuario` FROM `usuario` WHERE `usuario`= '190.152.46.82'";
// $ejecutar=mysqli_query($connect,$consulta);
// return $ejecutar;
// }
?>
