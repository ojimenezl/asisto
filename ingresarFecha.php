<?php
include "index.php";

$connect=mysqli_connect('remotemysql.com:3306','L8EAjRVMNT','nvsuTHJhHZ','L8EAjRVMNT');


$codigoqr=$_POST["msg2"];

$lond = $_POST["ubilat"];

$latd = $_POST["ubilon"];

$stog = $_POST["storagel"];


if($connect!=null ){

    $req=$_REQUEST['ingresar'];


    if($codigoqr!=null && $stog!=null && $lond!=null && $latd!=null){

     settype($latd, 'float'); 

     settype($lond, 'float'); 
     
     $varlt = $latd;
     
     $varlt = (double) $varlt;
     
     $varlg = $lond;

     $varlg = (double) $varlg;

     if(($varlg>=-0.21 && $varlg<=-0.17062) && ($varlt>=-78.4782 && $varlt<=-78.51)){

      guardarDatos($codigoqr,$stog,$lond,$latd,$req,$connect);

     }else{

        echo'<script> alert("Es posible que- '.$varlt.' -no este dentro - '.$varlg.' - del establecimiento")</script>';

     }

    }else{
     
    echo'<script> alert("Faltan datos, no hemos podido registrar tu asistencia. Prueba de nuevo.")</script>';
    echo '<script> window.location.assign("https://asisto.herokuapp.com"); </script>';

  }

}else{

  echo'<script> alert("NO Conetado")</script>';

}



function guardarDatos($codigoqr,$stog,$lond,$latd,$req,$connect){

  if(isset($req)){

      echo'<script> alert(" éxito!!")</script>';

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

      if($acumulador){

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

           $ejecutar2=mysqli_query($connect,$consultaip);
           $mostrar=mysqli_fetch_array($ejecutar2);
           $acumulador=$mostrar['nombre'];

           if($acumulador){

            echo'<script> alert("Bienvenido '.$acumulador.' se a creado tu usuario, ahora puedes registrar tu ASISTENCIA!!")</script>';

           }else{

            echo'<script> alert("No se a guardado su asistencia!!")</script>';

           }
         
        }else{

          echo'<script> alert("No se ha podigo guardar su dato!!")</script>';
        }

        
     }

  }else{

    echo'<script> alert("NO Ingresada")</script>';

  }

}

?>
