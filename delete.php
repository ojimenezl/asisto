
<?php 
if (isset($_GET['id'])){
	include('database.php');
	$cliente = new Database();
	$id=sanitize($_GET['id']);
	$res = $cliente->delete($id);
	if($res){
		header('location: https://asisto.herokuapp.com/registros.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>
