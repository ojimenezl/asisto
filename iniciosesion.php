
<html>

    <head>
        <link href="iniciosesion.css"  rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--link href="styleCELL.css" media="only screen and (min-width: 799px)" rel="stylesheet" /-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
    <script type="text/javascript" src="iniciosesion.js"></script>
    </head>


<hgroup>
    <h1>Administración Login</h1>
    <h3>By ASISTO</h3>
  </hgroup>


  <form action="verificacion_login.php" method="post" accept-charset="utf-8">
    <div class="group">
      <input id="email" name="email" type="email"><span class="highlight"></span><span class="bar"></span>
      <label>Email</label>
    </div>
    <div class="group">
      <input id="password" name="password" type="password"><span class="highlight"></span><span class="bar"></span>
      <label>Contraseña</label>
    </div>
    <input type="submit" name="ingresar" value="ingresar" />
    <button type="button" class="button buttonBlue">Ingresar
      <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
    </button>
  </form>



  <footer>
    <a href="http://www.polymer-project.org/" target="_blank">
    <img src="dep2.png">
   </a>
    <p>You Gotta Love <a href="http://www.polymer-project.org/" target="_blank">Google</a></p>
  </footer>

  </html>