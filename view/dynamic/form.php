<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <title>Citas</title>
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
        <div class="contact flex-center" style="flex-direction: column;">
            <h1>Cita</h1>
            <form action="" class="form">
                <div class="sec">
                    <label for="ci" class="txt-center">Número de cédula</label>
                    <input type="text" name="ci" id="ci" maxlength="10" onkeypress="return soloNumeros(event)">
                </div>
                <div class="sec">
                    <label for="paciente" class="txt-center">Nombres y apellidos</label>
                    <input type="text" name="paciente" id="paciente" onkeypress="return soloLetras(event)">
                </div>
                <div class="sec">
                    <label for="date" class="txt-center">Fecha de cita</label>
                    <input type="date" name="date" id="date">
                </div>
                <div class="sec-mssg">
                    <label for="mensaje" class="txt-center">Observaciones (Síntomas)</label>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="5"></textarea>
                </div>
                <div class="flex-center">
                    <input type="submit" class="button" value="Enviar" id="enviar" style="width:200px">
                </div>
            </form>
        </div>
    </main>
</body>

<script type="text/javascript">

    document.getElementById('enviar').onclick = function(){
        var ci = document.getElementById('ci').value;
        var paciente = document.getElementById('paciente').value;
        var date = document.getElementById('date').value;
        var mensaje = document.getElementById('mensaje').value;
        if(paciente==""||date==""||mensaje==""||ci==""){
           if(ci==""){
              swal("Error!", "Debe ingresar Cedula", "error");
               $("#ci").focus();   
                return false;
              
            }
            else if(paciente==""){
              swal("Error!", "Debe ingresar paciente", "error");
               $("#paciente").focus();   
                return false;

            }
            else if(date==""){
              swal("Error!", "Debe ingresar fecha", "error");
               $("#date").focus();   
                return false;

            }
            else if(mensaje==""){
              swal("Error!", "Debe ingresar mensaje", "error");
               $("#mensaje").focus();   
                return false;
              
            }
        }

        else{
          swal("Buen trabajo!", "Cita agendada correctamente", "success");
          // return false;
          // setTimeout(function(){return true;}, 3000);
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
</script>

</html>