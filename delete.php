
<?php 
echo "hola";
if (isset($_GET['id'])){
	include('database.php');
	$cliente = new Database();
	$id=intval($_GET['id']);
	$res = $cliente->delete($id);
	if($res){
		echo "foo es $id";
	}else{
		echo "Error al eliminar el registro";
	}
}
?>
