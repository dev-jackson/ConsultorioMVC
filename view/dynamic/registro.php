<!DOCTYPE html>
<html lang="es">
 <link rel="icon" href="assets/img/logo.png">
<head>
<?php include('librerias.php'); ?>
<meta charset="UTF-8">
<title>Login</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.form {border: 3px solid #f1f1f1;}

.passwc{
	margin-top: 10px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #3498DB;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  font-weight: bold;
}

button:hover {
  opacity: 0.8;
}



.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 150px;
  height: 150px;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 0;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
    <h2 id="registro">Registro</h2>
    <form action="index.php?c=Usuario&a=registroUsuario" method="POST">
    <div class="form">
  <div class="imgcontainer">
    <img src="assets/img/doctor.png" alt="Avatar" class="avatar" >
  </div>

  <div class="container">
    <label for="uname"><b>Username (# Cedula)</b></label>
    <input type="text" placeholder="Enter Username" name="uname" id="uname"  autocomplete="off" onkeypress="return justNumbers(event);"  maxlength="10"  onKeyUp="this.value=this.value.toUpperCase();" required>
    
    <span id="mensaje" style="float: right;"></span>
    
    <label for="nombre"><b>Nombres</b></label>
    <input type="text" placeholder="Ingrese Nombres" name="nombre" id="nombre"  autocomplete="off" onkeypress="return justLetters(event);"  maxlength="100"  onKeyUp="this.value=this.value.toUpperCase();" required>
    
    <label for="apellido"><b>Apellidos</b></label>
    <input type="text" placeholder="Ingrese Apellido" name="apellido" id="apellido"  autocomplete="off" onkeypress="return justLetters(event);"  maxlength="100"  onKeyUp="this.value=this.value.toUpperCase();" required>
    
    <div class="passwc">
    <label for="psw"><b>Contraseña</b></label>
          <div class="input-group">
              <input type="password" class="form-control" name="lpassword" placeholder="Contraseña" type="Password" id="lpassword"  >
		 <div class="input-group-btn">
          <button  id="show_password" class="btn btn-default" type="submit" title="Mostrar o Ocultar contraseña"  onclick="mostrarPassword()" ><i class="fa fa-eye-slash icon"></i>
      </button>
    </div></div>
    </div>
    <div id=msgerror></div>  
    <div class="passwc">
    <button type="submit" onclick="validar();" id="ingresar">Registrase</button>
    <button type="button" onclick="registro();" >Volver</button>
    </div>
    
  </div>
  </form>

</div>

</body>
</html>
<script type="text/javascript">


$('body').on('keyup', '#uname', function(){
  var Cedula = this.value;

  // Aqui esta el patron(expresion regular) a buscar en el input
  patroncedula = /^([0-9]{10})$/;
  
  if( patroncedula.test(Cedula) )
  {
    $('#mensaje').text('Formato correcto!');
    $('#mensaje').css({"color":"green"})
    $('#ingresar').attr('disabled',false);
    validateExisUser();

  }
  else if(Cedula==''){
  	$('#mensaje').text('');
    $('#ingresar').attr('disabled',false);
  }

  else
  {
     $('#mensaje').text('Formato incorrecto');
     $('#mensaje').css({"color":"red"})
     $('#ingresar').attr('disabled',true);
     clear();

  }
})
function validateExisUser(){
    var ci= $("#uname").val();
    var dataString = "username="+ci;
    $.ajax({
        type:"POST",
        url: "index.php?c=Usuario&a=validateUsuario",
        data: dataString,
        cache: false,
        beforeSend: function(){$("#registro").val("Verificando");},
        success: function(data){
            if(data){
              console.log(data);
            }else{
                console.log(data);
                $("#registro").val("Registro");
                $("#msgerror").html("<span style='color:#cc0000'>Error:</span> Usuario ya existe. "+data+"");
                $('#ingresar').attr('disabled',false);
            }
        }
    });

}
function clear(){
    $("#msgerror").html("<span></span>");
}	
function mostrarPassword(){
    var cambio = document.getElementById("lpassword");
    if(cambio.type == "password"){
      cambio.type = "text";
      $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
    }else{
      cambio.type = "password";
      $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
    }
  } 


function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
        return /\d/.test(String.fromCharCode(keynum));
        }

function justLetters(e){
  tecla = (document.all) ? e.keyCode : e.which;
  if (tecla==8) return true;
  patron =/^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
  te = String.fromCharCode(tecla);
  return patron.test(te);
}

  function validar(){
  	var Usuario= $("#uname").val();
  	var pass = $("#lpassword").val();
    var nombre = $("#nombre").val();
    var apellido = $("#apellido").val();


  	if (pass=='' || Usuario=='' || nombre=='' || apellido=='') {
  	    if (Usuario=='') {
  		    swal("Error!", "Debe ingresar Usuario", "error");
  		    return false
    	}
  	    else if(pass=='' ){
  		    swal("Error!", "Debe ingresar contraseña", "error");
  		    return false
  	    }
        else if(nombre==''){
            swal("Error!", "Debe ingresar nombre", "error");
            return false
	    }else if(apellido==''){
            swal("Error!","Debe ingresar apellido", "error");
            return false
        }
    }else{
    
		    //swal("Buen trabajo!", "Logueo exitoso!", "success");
		    //setTimeout(function(){window.location.href ="index.php?c=Usuario&a=registroUsuario";}, 1500);
	    }
  }
  function registro(){
      window.location.href="index.php?a=dynamic&d=login";
  }
</script>   