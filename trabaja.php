<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>Trabaja</title>
     <link rel="icon" href="assets/img/logo.png">
  <?php include('librerias.php'); ?>
    <style>
        .contact {
            width: 80%;
            height: 100vh;
            margin: auto;
        }
        
        .contact .form {
            padding: 40px;
            width: 600px;
        }
        
        .contact .form .sec {
            margin: 20px 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
        }
        
        input:not([type="submit"]),
        textarea {
            border: none;
            border-bottom: 1px solid #000;
            outline: none;
        }
        
        .contact .form .sec-mssg {
            margin: 40px 0;
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <header>
        <div class="cabecera">
            <a href="index.html" id="logo">Consultorio Médico Luis Salinas</a>
            <nav class="nav">
                <ul class="list-menu ls-none">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="contac.php">Contacto</a></li>
                    <li><a href="about.php">¿Quiénes somos?</a></li>
                    <li ><a href="form.php">Citas</a></li>
                    <li class="active"><a href="trabaja.php">Trabaja</a></li>
                    <li><a onclick="cerrar();">Cerrar Sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="contact flex-center" style="flex-direction: column;">
            <h1> Registro de Trabajo</h1>
            <form action="" class="form" style="text-align: center;">
                <div >
                     <p>Nombre: <input style="width: 100%" type="text" id='nombre' name="nombre" onkeypress="return soloLetras(event)"/></p>
                </div>
                <br>
                <div >
                    <p>Apellido: <input style="width: 100%"  type="text" id='apellido' name="apellido" onkeypress="return soloLetras(event)"/></p>
                </div>
                 <br>
                <div >
                    <p>Correo: <input style="width: 100%"  type="email" id='correo' name="correo"/></p>
                </div>
                 <br>
                <div >
                    <p>Celular: <input style="width: 100%"  type="text" id='celular' name="celular" onkeypress="return soloNumeros(event)"/></p>
                </div>
                 <br>
                <div class="flex-center">
                    <input type="submit" class="button" value="Enviar" id="enviar" style="width:200px">
                </div>
            </form>
        </div>
    </main>
    <footer>
 <?php include('footer.php'); ?>
</body>

<script type="text/javascript">

    document.getElementById('enviar').onclick = function(){
        var nombre = document.getElementById('nombre').value;
        var apellido = document.getElementById('apellido').value;
        var correo = document.getElementById('correo').value;
        var celular = document.getElementById('celular').value;
        if(nombre==""||apellido==""||correo==""||celular==""){
            if (nombre=="") {
              swal("Error!", "Debe ingresar nombre", "error");
                return false;
            }
            else if(apellido==""){
              swal("Error!", "Debe ingresar apellido", "error");
                return false;

            }
            else if(correo==""){
              swal("Error!", "Debe ingresar correo", "error");
                return false;
              
            }
            else if(celular==""){
              swal("Error!", "Debe ingresar celular", "error");
                return false;
            }

        }else{
          swal("Buen trabajo!", "Registro exitoso", "success");
        }
    }

    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false;
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
    function soloNumeros(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = "0123456789";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }

    function validar(){
        var nombre=$("#nombre").val();
        var apellido=$("#apellido").val();
        var correo=$("#correo").val();
        var celular=$("#celular").val();

    }
    function cerrar(){
         swal({
                     closeOnClickOutside:false,
                     title: "Aviso !",
                     text: "Esta seguro de cerrar Sesion",
                     icon: "warning",
                     buttons: {
                     si:{ 
                      text:"si",
                      value:"si"
                      },
                      no:{ 
                      text:"no",
                      value:"no"
                      },
                      },
                })
                .then((value) => {
                switch (value) {                                     
                case "si":
                           window.location.href ="login.php";    
                  break;
                case "no":
                               
                  break;
            }
          })

    }
</script>

</html>