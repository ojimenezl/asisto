<?php

	class Database{
		private $con;
		private $dbhost="remotemysql.com:3306";
		private $dbuser="L8EAjRVMNT";
		private $dbpass="nvsuTHJhHZ";
		private $dbname="L8EAjRVMNT";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
            $this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
        }
        public function sanitize($var){
            $return = mysqli_real_escape_string($this->con, $var);
            return $return;
          }
        
        public function delete($id){
		$sql = "DELETE FROM `registro` WHERE `id`='$id'";
		$res = mysqli_query($this->con, $sql);
		if($res){
		return true;
		}else{
		return false;
		}
	    }

          

		public function single_record($id){
			$sql = "SELECT * FROM `registro` where id='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
        }
        
		public function update($nombres,$cedula,$departamento,$ipuser,$latitud,$longitud,$hora,$id){
	$sql = "UPDATE `registro` SET `nombre`='$nombres',`cedula`='$cedula',`departamento`='$departamento',`ipuser`='$ipuser',`latitud`='$latitud',`longitud`='$longitud',`hora`='$hora' WHERE `id`='$id'";
			 
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		

          
          public function create($nombres,$cedula,$departamento,$ipuser,$latitud,$longitud,$hora){
              
              $sql = "INSERT INTO `registro` (`nombre`, `cedula`, `departamento`, `ipuser`, `latitud`, `longitud`, `hora`) VALUES ('$nombres','$cedula','$departamento','$ipuser','$latitud','$longitud','$hora')";
              
	      $res = mysqli_query($this->con, $sql);
              if($res){
                return true;
              }else{
              return false;
           }
		  }
		  
		  public function read(){
			$sql = "SELECT `cedula` FROM `registro`";
			$res = mysqli_query($this->con, $sql);
			return $res;
			}

}
?>
