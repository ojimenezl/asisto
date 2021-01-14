
<html>

<head>
    <link href="styleCELL.css"  rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--link href="styleCELL.css" media="only screen and (min-width: 799px)" rel="stylesheet" /-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
<script type="text/javascript" src="script.js"></script>
<!-- <script>
function validar(frm) {
  frm.ingresar.disabled = true;
  for (i=2; i<3; i++)
    if (frm['msg2'].value =='') return
  frm.ingresar.disabled = false;
}
</script> -->
<?php

$connect=mysqli_connect('remotemysql.com:3306','L8EAjRVMNT','nvsuTHJhHZ','L8EAjRVMNT');
function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
if($connect!=null ){
validarip($connect);
}
function validarip($connect){
 $pru="hola";
 echo'<script> alert("Ingresada")</script>';
// $ipuser=get_client_ip();
// $ipres=buscarDatos($ipuser,$connect);
// if($ipres!=null){
// header('Location: https://asisto.herokuapp.com/codigoQRUser.php');
// }else{
// header('Location: https://asisto.herokuapp.com/');
// }
}
	
// function buscarDatos($ipuser,$connect){
// $BBDDepar=$ipuser;
// $consulta="SELECT `usuario` FROM `usuario` WHERE `usuario`= '190.152.46.82'";
// $ejecutar=mysqli_query($connect,$consulta);
// return $ejecutar;
// }

?>
</head>

    <div id="option">
        <div id="btn1" class="active">&#8230;</div> 
        <div id="btn2">&#9974;</div>


    </div>

    <div id="main">
        <div id="box1">
            <div id="inputs">

                <input name="dataNombre" type="text" placeholder="Nombre" id="dataNombre" value="" required="required" />
                <input name="dataUsuario" type="text" placeholder="Usuario" id="dataUsuario" value="" required="required" />
                <input name="dataDepar" type="text" placeholder="Departamento" id="dataDepar" value="" required="required" />
                <input name="dataNaci" type="text" placeholder="Fecha " id="dataNaci" value="" required="required" />
                <input name="dataCedula" type="text" placeholder="Cedula" id="dataCedula" value="" required="required" />
                <div id="msg">Generaremos tu còdigo QR. Recuerda que es personal.</div>
                
                <div id="qrb">
		<button name="qrButton" id="qrButton" id>QR</button>
	        </div>
            </div>
            

            <div id="outputbox">
                <img src="img.png" />
		
            </div>
        </div>

        <div id="box2">
            <div id="scanner">
                <button id="stopbtn">Stop</button>
                <div id="startbtn">
                    <!--input type="text" name="msg2" id="msg2" size="40" onkeyup="return validar(this.value,'bt1')"-->
       
                    <img src="img.png" />
                </div>
                
                <video id="preview" class="p-1 border" style="width: 300px;"></video>
             <form  action="ingresarFecha.php" method="post" accept-charset="utf-8">
<!--                 <input type="text" name="msg2" id="msg2" onkeyup = "validar(this.form)"  hidden= "true" required="required /> -->
		     <input type="text" name="msg2" id="msg2" />
		     <input type="text" name="ubilat" id="ubilat"  />
		     <input type="text" name="ubilon" id="ubilon"  />
               
                <input type="submit" id="ingresar" name="ingresar" value="ingresar" />
             </form>
            </div>

        </div>

    </div>




        




</body>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>



</html>
