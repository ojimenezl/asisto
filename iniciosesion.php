
<html>

    <head>
        <link href="iniciosesion.css"  rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--link href="styleCELL.css" media="only screen and (min-width: 799px)" rel="stylesheet" /-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    <script type="text/javascript" src="iniciosesion.js"></script>
    </head>

<?php 
session_destroy();
?>
<hgroup>
    <h1>Administración Login</h1>
    <h3>By ASISTO</h3>
  </hgroup>


  <form action="verificacion_login.php" method="post" accept-charset="utf-8">
    <div class="group">
      <input id="email" name="email" type="text"><span class="highlight"></span><span class="bar"></span>
      <label>Email</label>
    </div>
    <div class="group">
      <input id="password" name="password" type="password"><span class="highlight"></span><span class="bar"></span>
      <label>Contraseña</label>
    </div>
<!--     <button type="submit" name="ingresar" id="ingresar" value="ingresar" lass="button buttonBlue"> Ingresar 
       <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div> 
      </button> -->
    <button type="submit" name="ingresar" id="ingresar" value="ingresar" class="button buttonBlue">Ingresar
      <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
  </form>



  <footer>
    <a href="http://www.polymer-project.org/" target="_blank">
    <img src="dep2.png">
   </a>
    <p>You Gotta Love <a href="http://www.polymer-project.org/" target="_blank">Google</a></p>
  </footer>
     <script type="text/javascript">
  var userid = document.getElementById("email");
         userid.value = "oscarj-456@hotmail.";
        localStorage.removeItem('user');
        localStorage.setItem('user',userid);
        console.log("holaaaaaa88"+userid);
         console.log("holaappp"+document.getElementById("email"));
         console.log("holaajjjj"+document.getElementById("email").value);
         </script>
  </html>
