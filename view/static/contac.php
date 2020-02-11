<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
     <link rel="icon" href="assets/img/logo.png">
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
  
    <main>
        <div class="services">
            <div class="title-style">Aseguramos</div>
            <div class="contenedor">
                <div class="servicio">
                    <i class="fas fa-file-medical"></i>

                    <h2 class="title-sc">Consultas médicas</h2>
                </div>
                <div class="servicio">
                    <i class="fas fa-notes-medical"></i>
                    <h2 class="title-sc">Atención rápida</h2>
                </div>
                <div class="servicio">
                    <i class="fas fa-laptop-medical"></i>
                    <h2 class="title-sc">Consultas las 24 horas</h2>
                </div>
                <div class="servicio">
                    <i class="fas fa-file-medical-alt"></i>
                    <h2 class="title-sc">Cuidado con tu salud</h2>
                </div>
                <div class="servicio">
                    <i class="fas fa-clinic-medical"></i>
                    <h2 class="title-sc">Atención en casa</h2>
                </div>
                <div class="servicio">
                    <i class="fas fa-briefcase-medical"></i>
                    <h2 class="title-sc">Recetas especializadas</h2>
                </div>
            </div>
        </div>
        <div class="contact flex-center" style="flex-direction: column;">
            <h1 class="title-style">Contáctenos</h1>
            <form action="" class="form">
                <div class="sec">
                    <label for="email">Correo</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="sec">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" onkeypress="return soloLetras(event)">
                </div>
                <div class="sec-mssg">
                    <label for="mensaje" class="txt-center">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                </div>
                <div class="flex-center">
                    <input type="submit" class="button" value="Enviar" id ="enviar"style="width:200px">
                </div>
            </form>
        </div>
    </main>
</body>

<script type="text/javascript">
    
    document.getElementById('enviar').onclick = function(){
        var correo = document.getElementById('email').value;
        var nombre = document.getElementById('nombre').value;
        var mensaje = document.getElementById('mensaje').value;
        if(correo==""||nombre==""||mensaje==""){
            if (correo=="") {
                swal("Error!", "Debe ingresar correo", "error");
                return false;
            }
            else if(nombre==""){
                swal("Error!", "Debe ingresar nombre", "error");
                return false;
            }
        
        }else{

          swal("Buen trabajo!", "Mensaje enviado correctamente", "success");
        }
    }


    function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
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

</script>


</html>