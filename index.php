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

<!--                 <input name="dataNombre" type="text" placeholder="Nombre" id="dataNombre" value="" required="required" /> -->
                <input name="dataUsuario" type="text" placeholder="Usuario" id="dataUsuario" value="" required="required" />
                <input name="dataDepar" type="text" placeholder="Departamento" id="dataDepar" value="" required="required" />
<!--                 <input name="dataNaci" type="text" placeholder="Fecha " id="dataNaci" value="" required="required" /> -->
                <input name="dataCedula" type="text" placeholder="Cedula" id="dataCedula" value="" required="required" />
                <div id="msg">Generaremos tu còdigo QR. Recuerda que es personal.</div>
                
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
                <button id="stopbtn">Stop</button>
                <div id="startbtn">
                    <!--input type="text" name="msg2" id="msg2" size="40" onkeyup="return validar(this.value,'bt1')"-->
       
                    <img src="img.jpg" />
                </div>
		    

		    
		    
		    
<!--                 <input type="file" accept="image/*" capture="camera"> -->
                <video id="preview" class="p-1 border" style="width: 300px;"></video>
             <form  action="ingresarFecha.php" method="post" accept-charset="utf-8">
<!--                 <input type="text" name="msg2" id="msg2" onkeyup = "validar(this.form)"   disabled="disabled" hidden= "true" required="required /> -->
		     <input type="text" name="msg2" id="msg2" hidden= "true"/>
		     <input type="text" name="ubilat" id="ubilat" hidden= "true"/>
		     <input type="text" name="ubilon" id="ubilon" hidden= "true"/>
		     <input type="text" name="storagel" id="storagel" hidden= "true"/>
		     <input type="text" name="msg2m" id="msg2m" placeholder="No Còdigo QR" disabled="disabled"/>
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


<!DOCTYPE html>

<!--
Copyright 2017 Google Inc.
Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at
    http://www.apache.org/licenses/LICENSE-2.0
Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
-->

<html lang="en">
<head>

<script type="9861014900b715bb88e4ef9b-text/javascript">
//  philipwalton.com/articles/the-google-analytics-setup-i-use-on-every-site-i-build
window.ga = window.ga || function() {
  (ga.q = ga.q || []).push(arguments);
};
ga('create', 'UA-33848682-1', 'auto');
ga('set', 'transport', 'beacon');
ga('send', 'pageview');
</script>
<script async src="https://www.google-analytics.com/analytics.js" type="9861014900b715bb88e4ef9b-text/javascript"></script>

<meta charset="utf-8">
<meta name="description" content="Simplest possible examples of HTML, CSS and JavaScript.">
<meta name="author" content="//samdutton.com">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta itemprop="name" content="simpl.info: simplest possible examples of HTML, CSS and JavaScript">
<meta itemprop="image" content="/images/icons/icon192.png">
<meta id="theme-color" name="theme-color" content="#fff">

<link rel="icon" href="/images/icons/icon192.png">

<base target="_blank">


<title>mediaDevices.enumerateDevices()</title>

<link rel="stylesheet" href="../../css/main.css">

<style>
h1 {
  margin: 0 0 24px 0;
}
select {
  width: 150px;
}
video {
  margin: 10px 0 0 0;
}
</style>

</head>

<body>

<div id="container">
    
    <section id="george-floyd">
      <a href="https://en.wikipedia.org/wiki/George_Floyd" title="Wikipedia entry for George Floyd" id="name">
        <img src="../../images/george-floyd.jpg" alt="George Floyd">
      </a>
      <a href="https://en.wikipedia.org/wiki/George_Floyd" title="Wikipedia entry for George Floyd" id="name">George Floyd</a>
      <a href="https://secure.actblue.com/donate/naacp-1" id="dates">October 14, 1973 –&nbsp;May&nbsp;25,&nbsp;2020</a> 
    </section>

  <h1><a href="../../index.html" title="simpl.info home page">simpl.info</a> mediaDevices.<wbr>enumerateDevices()</h1>

  <div class="select">
    <label for="audioSource">Audio source: </label><select id="audioSource"></select>
  </div>

  <div class="select">
    <label for="videoSource">Video source: </label><select id="videoSource"></select>
  </div>

  <video autoplay muted playsinline></video>

  <script async src="script.js" type="9861014900b715bb88e4ef9b-text/javascript"></script>

  <p>For more information see <a href="https://www.html5rocks.com/en/tutorials/getusermedia/intro/" title="Media capture article by Eric Bidelman on HTML5 Rocks">Capturing Audio &amp; Video in HTML5</a> on HTML5 Rocks.</p>

<a href="https://github.com/samdutton/simpl/blob/gh-pages/getusermedia/sources/js/main.js" title="View source for this page on GitHub" id="viewSource">View source on GitHub</a>

</div>

<script src="../../js/lib/ga.js" type="9861014900b715bb88e4ef9b-text/javascript"></script>

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="9861014900b715bb88e4ef9b-|49" defer=""></script></body>
</html>
