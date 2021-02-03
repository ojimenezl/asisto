<?php
	if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:index.php");
	}
?>
<!DOCTYPE html>
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
                    <div class="col-sm-8"><h2>Editar <b>Cliente</b></h2></div>
                    <div class="col-sm-4">
                        <a href="https://asisto.herokuapp.com/registros.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
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
					$observaciones = $clientes->sanitize($_POST['observaciones']);
					$id_cliente=intval($_POST['id_cliente']);
					$res = $clientes->update($nombres,$cedula,$departamento,$ipuser,$latitud,$longitud,$hora,$observaciones,$id_cliente);
					if($res){
						$message= "Datos actualizados con éxito";
						$class="alert alert-success";
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
				$datos_cliente=$clientes->single_record($id);
			?>
						<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Nombres:</label>
					<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required value="<?php echo $datos_cliente->nombre;?>" >
				        <input type="hidden" name="id_cliente" id="id_cliente" class='form-control' maxlength="100"   value="<?php echo $datos_cliente->id;?>">
					</div>
				<div class="col-md-6">
					<label>Cédula:</label>
					<input type="text" name="cedula" id="cedula" class='form-control' maxlength="100" required value="<?php echo  $datos_cliente->cedula;?>">

				</div>
                <div class="col-md-6">
					<label>Departamento:</label>
					<input type="text" name="departamento" id="departamento" class='form-control' maxlength="100" required value="<?php echo  $datos_cliente->departamento;?>">
                </div>
                <div class="col-md-6">
					<label>ipuser:</label>
					<input type="text" name="ipuser" id="ipuser" class='form-control' maxlength="100" required value="<?php echo $datos_cliente->ipuser;?>">
                </div>

                <div class="col-md-6">
					<label>latitud:</label>
					<input type="text" name="latitud" id="latitud" class='form-control' maxlength="100" required value="<?php echo  $datos_cliente->latitud;?>">
                </div>
                <div class="col-md-6">
					<label>longitud:</label>
					<input type="text" name="longitud" id="longitud" class='form-control' maxlength="100" required value="<?php echo $datos_cliente->longitud;?>">
                </div>
                <div class="col-md-6">
					<label>hora:</label>
					<input type="text" name="hora" id="hora" class='form-control' maxlength="100" required value="<?php echo $datos_cliente->hora;?>">
                </div>
					<div class="col-md-12">
					<label>Dirección:</label>
					<textarea  name="observaciones" id="observaciones" class='form-control' maxlength="255" ><?php echo $datos_cliente->observaciones;?></textarea>
				</div>
                
<!-- 				<div class="col-md-12">
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
				
				</div> -->
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Guardar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>
</body>
</html>
