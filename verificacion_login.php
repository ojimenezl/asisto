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

<!-- 
$req=$_REQUEST['ingresar'];

$BBDEmail=$email;
 $BBDPass=$password;
  // Consulta segura para evitar inyecciones SQL.
  //$sql = sprintf("SELECT * FROM administrar WHERE email='%s' AND password = '%s'", mysql_real_escape_string($BBDEmail), mysql_real_escape_string($BBDPass));
 // $sql="SELECT `nombre` FROM `usuario` WHERE `ipuser`= '$BBDDIp'  limit 1";
  $sql="SELECT * FROM `administrar` WHERE `email`='oscarj-456@hotmail.com' and `password`='o1234'";
  echo'<script> alert("'.$conn.'")</script>';
  echo'<script> alert("'.$sql.'")</script>';
  $resultado = mysqli_query($conn,$sql);
  echo'<script> alert("'.$resultado.'")</script>';
  // Verificando si el usuario existe en la base de datos.
  if($resultado){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $BBDEmail;
     
    // Redirecciono al usuario a la página principal del sitio.
    // header("HTTP/1.1 302 Moved Temporarily"); 
    // header("Location: principal.php"); 
    header('Location: http://localhost/registros.php');
  }else{
    echo'<script> alert("Conectado1234 NO")</script>';
  } -->
