$(document).ready(function() {
var latd="";
var latitud="";
$('#img2').hide();
function geoloc() {
  d=document.getElementById("demo");
  if (navigator.geolocation){
//     d.innerHTML="<p>Tu dispositivo soporta la geolocalización.</p>";
    navigator.geolocation.getCurrentPosition(showPosition,showError)

	  return true;

  }
else {
   
   d.innerHTML="<p>Lo sentimos, tu dispositivo no admite la geolocaización.</p>";
	return false;
	
   }
}

function storage(){
  const aValue=localStorage.getItem('variable1');
	
//   let aleatorior = Math.round(Math.random()*10);
//   alert("EN storage ");
  
//   alert("algo "+aValue+aleatorior+"--");
  if (aValue != null){
   var inputstorage = document.getElementById("storagel");
   inputstorage.value = aValue;
   alert("Se a creado una clave única para ti");
  }else{
   let aleatorio = Math.round(Math.random()*1000000);
   let p="12345mm"+aleatorio;
   var inputstorage = document.getElementById("storagel");
   localStorage.setItem('variable1', p);
   inputstorage.value = p;
   alert("Se a creado una clave única para ti");
  }
}	
	
function showPosition(position){
  latitud=position.coords.latitude;
	longitud=position.coords.longitude;
  radio=Math.sqrt(15000) * 10;
	latd=latitud;
	var longd=longitud;
	
 var inputlatd = document.getElementById("ubilat");
 var inputlatdm = document.getElementById("ubilatm");
    inputlatd.value = latd;
    inputlatdm.value = "ubicacion listo!";
 var inputlond = document.getElementById("ubilon");
 var inputlondm = document.getElementById("ubilonm");
    inputlond.value = longd;
		  if(latitud != ""){
		    $('#img2').show();
		    $('#startbtn img').hide();
		    alert("UBICACIÓN LISTO88!!");
	    }
	
    inputlondm.value = "ubicacion listo!";
	
	

}
function showError(error){
  switch(error.code) {
    case error.PERMISSION_DENIED:
      d.innerHTML+="<p>El usuario ha denegado el permiso a la localización.</p>"
      break;
    case error.POSITION_UNAVAILABLE:
      d.innerHTML+="<p>La información de la localización no está disponible.</p>"
      break;
    case error.TIMEOUT:
      d.innerHTML+="<p>El tiempo de espera para buscar la localización ha expirado.</p>"
      break;
    case error.UNKNOWN_ERROR:
      d.innerHTML+="<p>Ha ocurrido un error desconocido.</p>"
      break;
    }
  }


    
    
    
    
    var qrcode = new QRCode("outputbox");

    function makeCode() {
//         var inputNombre = document.getElementById('dataNombre');
        var inputUsuario = document.getElementById('dataUsuario');
        var inputDepar = document.getElementById('dataDepar');
//         var inputNaci = document.getElementById('dataNaci');
        var inputCedula = document.getElementById('dataCedula');
//         input = inputNombre.value + " " + inputUsuario.value + " " + inputDepar.value + " " + inputNaci.value + " " + inputCedula.value;
         input = inputUsuario.value + " " + inputDepar.value + " " + inputCedula.value;

        qrcode.makeCode(input);
    }

    $('#qrButton').click(function() {
        makeCode();

    }).on('keydown', function(e) {
        if (e.keyCode == 13) {
            makeCode();
        }
    });



    $('#btn2').click(function() {
        $('#main').animate({
            'left': '-100%'
        });

        $('#btn1').removeClass('active');
        $('#btn2').addClass('active');
    });

    $('#btn1').click(function() {
        $('#main').animate({
            'left': '0%'
        });

        $('#btn2').removeClass('active');
        $('#btn1').addClass('active');
    });

    $('#stopbtn').click(function() {
        $('#startbtn img').show();
        $('#stopbtn').hide();
	$('#img2').hide();
        var videoEl = document.getElementById('preview');
//         stream = videoEl.srcObject;
//         tracks = stream.getTracks();
//         tracks.forEach(function(track) {
//             track.stop();
//         });
//         videoEl.srcObject = null;
    });

    $('#startbtn').click(function() {
        
        $('#startbtn img').hide();
	
//         $('#stopbtn').show();
        var inputF = document.getElementById("msg2");
	var inputFm = document.getElementById("msg2m");
//         var scanner = new Instascan.Scanner({
//             video: document.getElementById('preview'),
//             scanPeriod: 5,
//             mirror: false
//         });
//         scanner.addListener('scan', function(content) {
//             inputF.value = content
// 	    inputFm.value = "QR Listo!"
//                 //$('#msg2').text(content);
//         });

 	geoloc();
	storage();
	    if(latitud == ""){
		    $('#startbtn img').show();
// 		    $('#img2').hide()
		    alert("Recuerde ACTIVAR su UBICACIÓN!");
	    }
	    
//      let constraints;
//     var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;



//         Instascan.Camera.getCameras().then(function(cameras) {
//             if (cameras.length > 0) {
//                 scanner.start(cameras[1]);
//                 $('[name="options"]').on('change', function() {
//                     if ($(this).val() == 1) {
//                         if (cameras[0] != "") {
// 				    if (iOS) {
// 				      constraints = {
// 					audio: false,
// 					video: {
// 					  facingMode: { exact: "environment" },
// 					  mandatory: {
// 					    sourceId: this.id,
// 					    minWidth: 600,
// 					    maxWidth: 800,
// 					    minAspectRatio: 1.6
// 					  },
// 					  optional: []
// 					}
// 				      };
// 				    } else {
// 					scanner.start(cameras[1]);
// 				    }
//                             scanner.start(cameras[1]);
//                         } else {
//                             alert("Su cámara delantera no funciona");
//                         }
//                     } else if ($(this).val() == 2) {
//                         if (cameras[1] != "") {
                            
// 				    if (iOS) {
// 				      constraints = {
// 					audio: false,
// 					video: {
// 					  facingMode: { exact: "environment" },
// 					  mandatory: {
// 					    sourceId: this.id,
// 					    minWidth: 600,
// 					    maxWidth: 800,
// 					    minAspectRatio: 1.6
// 					  },
// 					  optional: []
// 					}
// 				      };
// 				    } else {
// 					scanner.start(cameras[1]);
// 				    }
//                         } else {
//                             alert("Su cámara trasera no funciona");
//                         }
//                     }
//                 });
//             } else {
//                 alert("Su cámara no funciona");
//             }
//         }).catch(function(e) {
//             alert(e);
//         });
    });


    $("#save").click(function(e) {

        /*evita la recarga de la pagina*/
        e.preventDefault();

        var valores = $("#ingresar").val();
        var caja = $(".contenido");

        caja.append("<p>" + valores + "</p>");

    });
	    
    // function writeToFile(d1, d2){
    //     var fso = new ActiveXObject("Scripting.FileSystemObject");
    //     var fh = fso.OpenTextFile("data.txt", 8, false, 0);
    //     fh.WriteLine(d1 + ',' + d2);
    //     fh.Close();
    // }


  








});
