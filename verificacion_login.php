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

        $BBDEmail=$email;
        $BBDPass=$password;
        //$BBDUsuario=$UsuarioDato;
        //$BBDDepar=$DeparDato;
        //$BBDNaci=$NaciDato;
        //$BBDCedula=$CedulaDato;
        //$consulta="INSERT INTO usuario (usuario,nombre,departamento,cedula,fechanaci) VALUES ('$BBDUsuario','$BBDNombre','$BBDDepar','$BBDCedula','$BBDNaci')";
        
        $consulta="SELECT * FROM `administrar` WHERE `email`='oscarjjjj-456@hotmail.com' and `password`='o1234'";
        $ejecutar=mysqli_query($conn,$consulta);
      
        if($ejecutar){
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


