<?php
$connect=mysqli_connect('remotemysql.com:3306','L8EAjRVMNT','nvsuTHJhHZ','L8EAjRVMNT');
?>
<html>

<head>
    <link href="styleCELL.css"  rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--link href="styleCELL.css" media="only screen and (min-width: 799px)" rel="stylesheet" /-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<script type="text/javascript" src="script.js"></script>
 <script>
//   var aValue = storage.getItem('passuni');
//   if (aValue){
// 	  alert("dato storage guardado");
 
//   }else{
//    var p="12345mm"
//    localStorage.setItem('passuni', p); 
// 	  alert("dato NO storage guardado");
//   }
	
// function validar(frm) {
//   frm.ingresar.disabled = true;
//   for (i=2; i<3; i++)
//     if (frm['msg2'].value =='') return
//   frm.ingresar.disabled = false;
// }
</script> 

</head>

    <div id="option">
        <div id="btn1" class="active">&#8230;</div> 
        <div id="btn2">&#9974;</div>


    </div>
	
	
	
		
    <div id="main">
        <div id="box1">
            <div id="inputs">
		    <h1 name="dataNombre" id="dataNombre">ASISTO</h1>
<!--                 <input name="dataNombre" type="text" placeholder="Nombre" id="dataNombre" value="" required="required" /> -->
<!--                 <input name="dataUsuario" type="text" placeholder="Usuario" id="dataUsuario" value="" required="required" />
                <input name="dataDepar" type="text" placeholder="Departamento" id="dataDepar" value="" required="required" /> -->
<!--                 <input name="dataNaci" type="text" placeholder="Fecha " id="dataNaci" value="" required="required" /> -->
<!--                 <input name="dataCedula" type="text" placeholder="Cedula" id="dataCedula" value="" required="required" /> -->
                <div id="msg">De clic en el botón QR ,se generará un código y podra ingresar a la página por medio de su celular.</div>
                
                <div id="qrb">
		<button name="qrButton" id="qrButton" id>QR</button>
	        </div>
            </div>
            

            <div id="outputbox">
                <img src="dep2.png" />
		
            </div>
        </div>

        <div id="box2">
		<div id="ttb">
                       <table id="table1">
			  <thead>
			         <tr>
				   <th>ID</th>
				   <th>NOMBRE</th>
				   <th>APELLIDO</th>
				</tr>
			  </thead>
			      <?php
			       $sql="SELECT * FROM `registro` order by hora desc limit 10";
			       $result=mysqli_query($connect,$sql);
			  
			    while($mostrar=mysqli_fetch_array($result)){
			       ?>
			    <tr>
			      <td id="td1"><?php echo $mostrar['nombre'] ?></td>
			      <td id="td1"><?php echo $mostrar['departamento'] ?></td>
			      <td id="td1"><?php echo $mostrar['hora'] ?></td>
			    </tr>
			<?php
			       }     
		        ?>
			       
			       
		</table>
		
		  </div>
            <div id="scanner">
<!--                 <button id="stopbtn">Stop</button> -->
                <div id="startbtn">
                    <!--input type="text" name="msg2" id="msg2" size="40" onkeyup="return validar(this.value,'bt1')"-->
       
                    <img src="ubi.png" />
		    <img id="img2" src="listo2.png" />
                </div>
		    

		    
		    
		    
<!--                 <input type="file" accept="image/*" capture="camera"> -->
<!--                 <video id="preview" class="p-1 border" style="width: 300px;"></video> -->
             <form  action="ingresarFecha.php" method="post" accept-charset="utf-8">
<!--                 <input type="text" name="msg2" id="msg2" onkeyup = "validar(this.form)"   disabled="disabled" hidden= "true" required="required /> -->
		     <input type="text" name="msg2" id="msg2" />
		     <input type="text" name="ubilat" id="ubilat" hidden= "true"/>
		     <input type="text" name="ubilon" id="ubilon" hidden= "true"/>
		     <input type="text" name="storagel" id="storagel" hidden= "true"/>
		     <input type="text" name="msg2m" id="msg2m" placeholder="No Còdigo QR" disabled="disabled" hidden= "true"/>
		     <input type="text" name="ubilatm" id="ubilatm" placeholder="No Ubicaciòn" disabled="disabled"/>
		     <input type="text" name="ubilonm" id="ubilonm" placeholder="No Ubicaciòn" disabled="disabled"/>
               
                <input type="submit" id="ingresar" name="ingresar" value="ingresar" />
             </form>
            </div>

        </div>

    </div>




        




</body>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>



</html>


