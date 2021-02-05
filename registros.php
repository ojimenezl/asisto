<script> var aValue=localStorage.getItem('user');  
	var aValuepass=localStorage.getItem('pass'); </script>    	
<?php
            $email = "<script> document.writeln(aValue) </script>"; 
            $password = "<script> document.writeln(aValuepass) </script>";

        

	   $conn = mysqli_connect('remotemysql.com:3306','L8EAjRVMNT','nvsuTHJhHZ','L8EAjRVMNT');
	   if($email!=null && $password!=null){
	  // Validar la conexión de base de datos.
	  if ($conn!=null) {
	    echo'<script> alert("Conectado1234")</script>';
// 	    $req=$_REQUEST['ingresar'];

	     echo'<script> alert("Conectado4")</script>';
		$BBDEmail=$email;
		$BBDPass=$password;
		//$BBDUsuario=$UsuarioDato;
		//$BBDDepar=$DeparDato;
		//$BBDNaci=$NaciDato;
		//$BBDCedula=$CedulaDato;
		//$consulta="INSERT INTO usuario (usuario,nombre,departamento,cedula,fechanaci) VALUES ('$BBDUsuario','$BBDNombre','$BBDDepar','$BBDCedula','$BBDNaci')";
	//        echo'<script> alert("'.$email.'")</script>';
	//        echo'<script> alert("'.$BBDPass.'")</script>';
		  
	        $consulta = "SELECT * FROM `administrar` WHERE `email`='oscarj-456@hotmail.com' AND `password` = 'o1234'";
		//$consulta = "SELECT * FROM `administrar` WHERE `email`='$BBDEmail' AND `password` = '$BBDPass'";
		//$consulta="SELECT * FROM `administrar` WHERE `email`='oscarjjj-456@hotmail.com' and `password`='o1234'";

	       $ejecutar2=mysqli_query($conn,$consulta);
	       $mostrar=mysqli_fetch_array($ejecutar2);
	       $acumulador=$mostrar['email'];

		if($acumulador){
		 echo'<script> alert("Bienvenido!!")</script>';
		 $_SESSION['email'] = $BBDEmail;
		 header('Location: https://asisto.herokuapp.com/registros.php');

		}else{
		  echo'<script> alert("NO Ingresada")</script>';
		  echo '<script> window.location.assign("https://asisto.herokuapp.com"); </script>';
		}

	  }else{
	    echo'<script> alert("NO Conectado")</script>';
           echo '<script> window.location.assign("https://asisto.herokuapp.com"); </script>';



	}
	   }else{
	      echo'<script> alert("Acceso no permitido")</script>';
		echo '<script> window.location.assign("https://asisto.herokuapp.com"); </script>';
	   }
	?>
<?php
session_start();
$connect=mysqli_connect('remotemysql.com:3306','L8EAjRVMNT','nvsuTHJhHZ','L8EAjRVMNT');
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD con PHP usando Programación Orientada a Objetos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>Cliente</b></h2></div>
                    <div class="col-sm-4">
                        <a href="index.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php
				include ("database.php");
				$clientes= new Database();
				if(isset($_POST) && !empty($_POST)){

					$nombres = $clientes->sanitize($_POST['nombres']);
					$cedula = $clientes->sanitize($_POST['cedula']);
					$departamento = $clientes->sanitize($_POST['departamento']);
				    $ipuser = $clientes->sanitize($_POST['ipuser']);
				    $latitud= $clientes->sanitize($_POST['latitud']);
				    $longitud= $clientes->sanitize($_POST['longitud']);
					$hora = $clientes->sanitize($_POST['hora']);
					
					$res = $clientes->create($nombres,$cedula,$departamento,$ipuser,$latitud,$longitud,$hora);
					if($res){
						$message= "Datos insertados con éxito";
						$class="alert alert-success";
					}else{
						$message="No se pudieron insertar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
	
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Nombres:</label>
					<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Cédula:</label>
					<input type="text" name="cedula" id="cedula" class='form-control' maxlength="100" required>
                </div>
                <div class="col-md-6">
					<label>Departamento:</label>
					<input type="text" name="departamento" id="departamento" class='form-control' maxlength="100" required>
                </div>
                <div class="col-md-6">
					<label>ipuser:</label>
					<input type="text" name="ipuser" id="ipuser" class='form-control' maxlength="100" required>
                </div>

                <div class="col-md-6">
					<label>latitud:</label>
					<input type="text" name="latitud" id="latitud" class='form-control' maxlength="100" required>
                </div>
                <div class="col-md-6">
					<label>longitud:</label>
					<input type="text" name="longitud" id="longitud" class='form-control' maxlength="100" required>
                </div>
                <div class="col-md-6">
					<label>hora:</label>
					<input type="text" name="hora" id="hora" class='form-control' maxlength="100" required>
                </div>
                
				<div class="col-md-12">
					<label>Dirección:</label>
					<textarea  name="direccion" id="direccion" class='form-control' maxlength="255" required></textarea>
				</div>
				<div class="col-md-6">
					<label>Teléfono:</label>
					<input type="text" name="telefono" id="telefono" class='form-control' maxlength="15" required >
				</div>
				<div class="col-md-6">
					<label>Correo electrónico:</label>
					<input type="email" name="correo_electronico" id="correo_electronico" class='form-control' maxlength="64" required>
				
				</div>
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>   
	
	
	 <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Listado de  <b>Clientes</b></h2></div>
                    <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar cliente</a>
                    </div>
                </div>
            </div>
	                    <table class="table table-bordered">
				<thead>
				    <tr>
					<th>Nombres</th>
					<th>cedula</th>
					<th>departamento</th>
					<th>ipuser</th>
					<th>latitud</th>
					<th>longitud</th>
					<th>hora</th>
					<th>Observaciones</th>
				    </tr>
				</thead>
			      <?php
			       $sql="SELECT * FROM `registro` order by hora desc limit 10";
			       $result=mysqli_query($connect,$sql);
			  
			    while($mostrar=mysqli_fetch_array($result)){
			       ?>
			    <tr>
			      <td ><?php echo $mostrar['nombre'] ?></td>
			       <td><?php echo $mostrar['cedula']?></td>
			      <td ><?php echo $mostrar['departamento'] ?></td>
			      <td><?php echo $mostrar['ipuser']?></td>
			      <td><?php echo $mostrar['latitud']?></td>
			      <td><?php echo $mostrar['longitud']?></td>
			      <td ><?php echo $mostrar['hora'] ?></td>
		              <td ><?php echo $mostrar['observaciones'] ?></td>

			      <td>
				<a href="update.php?id=<?php echo $mostrar['id'];?>" class="edit" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
				<a href="delete.php?id=<?php echo $mostrar['id'];?>" class="delete" title="Eliminar" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                              </td>
			    </tr>
			<?php
			       }     
		        ?>
			       
			       
		</table>
		        </div>
    </div> 
	
	
	
	
	
	
	 <script type="text/javascript">
        let aValue=localStorage.getItem('user')
	 </script>

	
	<script type="text/javascript">
	if (aValue != ""){
        console.log("holaaaaaa88",aValue)
	}else{
		let aValue="";
		localStorage.removeItem('user');
		window.location.href="https://asisto.herokuapp.com/iniciosesion.php";
	}
    </script>
	



	

</body>
</html>


