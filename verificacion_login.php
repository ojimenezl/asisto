<?php
include "iniciosesion.php";

   
  // Obtengo los datos cargados en el formulario de login.
  $email = $_POST['email'];
  $password = $_POST['password'];
  

  // Crear conexión con la base de datos.

  $conn = mysqli_connect('remotemysql.com:3306','L8EAjRVMNT','nvsuTHJhHZ','L8EAjRVMNT');
   
  // Validar la conexión de base de datos.
  if ($conn!=null) {
    echo'<script> alert("Conectado1234")</script>';
    $req=$_REQUEST['ingresar'];
    if(isset($req)){
     echo'<script> alert("Conectado4")</script>';
        $BBDEmail=$email;
        $BBDPass=$password;
        //$BBDUsuario=$UsuarioDato;
        //$BBDDepar=$DeparDato;
        //$BBDNaci=$NaciDato;
        //$BBDCedula=$CedulaDato;
        //$consulta="INSERT INTO usuario (usuario,nombre,departamento,cedula,fechanaci) VALUES ('$BBDUsuario','$BBDNombre','$BBDDepar','$BBDCedula','$BBDNaci')";
       echo'<script> alert("'.$BBDEmail.'")</script>';
       echo'<script> alert("'.$BBDPass.'")</script>';
        $consulta = "SELECT * FROM administrar WHERE email='$BBDEmail' AND password = '$BBDPass'";
        //$consulta="SELECT * FROM `administrar` WHERE `email`='oscarjjj-456@hotmail.com' and `password`='o1234'";
       
       $ejecutar2=mysqli_query($conn,$consulta);
       $mostrar=mysqli_fetch_array($ejecutar2);
       $acumulador=$mostrar['email'];
      
        if($acumulador){
         echo'<script> alert("Fecha Ingresada")</script>';
         header('Location: http://localhost/registros.php');
         
        }else{
          echo'<script> alert("NO Ingresada")</script>';
        }
      
    }else{
     echo'<script> alert("hola no")</script>';
    }

    
   
   
  }else{
    echo'<script> alert("NO Conectado")</script>';

    

}
?>


