
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
</head>

    <div id="option">
        <div id="btn1" class="active">&#8230;</div> 
        <div id="btn2">&#9974;</div>


    </div>

    <div id="main">
        <div id="box1">
            <div id="inputs">

                <input name="dataNombre" type="text" placeholder="Nombre" id="dataNombre" value=""/>
                <input name="dataUsuario" type="text" placeholder="Usuario" id="dataUsuario" value=""/>
                <input name="dataDepar" type="text" placeholder="Departamento" id="dataDepar" value=""/>
                <input name="dataNaci" type="text" placeholder="Fecha de Nacimiento" id="dataNaci" value=""/>
                <input name="dataCedula" type="text" placeholder="Cedula" id="dataCedula" value=""/>
                <div id="msg">Hits enter to generate QR code</div>
                

		<button id="qrButton" id>QR</button>
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
<!--                 <input type="text" name="msg2" id="msg2" onkeyup = "validar(this.form)" /> -->
		     <input type="text" name="msg2" id="msg2" onkeyup = "validar(this.form)" required="required"/>
		     <input type="text" name="ubilat" id="ubilat" hidden= "true" />
		     <input type="text" name="ubilon" id="ubilon" hidden= "true" />
                <!--input type="text" name="msg2" id="msg2" size="40" onkeyup="return validar(this.value,'bt1')"-->
                <input type="submit" id="ingresar" name="ingresar" value="ingresar" />
             </form>
            </div>

        </div>

    </div>




        




</body>
<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>



</html>
