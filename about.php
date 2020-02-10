<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nosotros</title>
     <link rel="icon" href="assets/img/logo.png">
    <?php include('librerias.php'); ?>
    <style>
        .information-c {
            width: 80%;
            padding: 40px;
            box-sizing: border-box;
        }
        
        .information-c .information {}
        
        .information-c .picture img {
            width: 100%;
        }
        
        .information-c .title {
            margin: 20px 0;
        }
        /* Cada hijo de un contendor */
        
        .information-c:nth-child(1n) {
            text-align: center;
            margin: 0 auto;
        }
        
        .ubicacion {
            width: 80%;
            /* Tamaño del viewport */
            height: 100vh;
            margin: auto;
        }
        
        .objetivos li {
            text-align: left;
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
                    <li class="active"><a href="about.php">¿Quiénes somos?</a></li>
                    <li><a href="form.php">Citas</a></li>
                    <li><a href="trabaja.php">Trabaja</a></li>
                    <li><a onclick="cerrar();">Cerrar Sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="information-c grid-2c flex-center">
            <div class="information">
                <h2 class="title title-style">¿Quiénes somos?</h2>
                <p>
                    Nos dedicamos a la medicina general.
                </p>
                <p>
                    Damos tratamientos basándonos en exámenes de laboratorio para estar seguro de lo que se está dando al paciente
                </p>
            </div>
            <div class="picture">
                <img src="assets/img/img2.png" alt="">
            </div>
        </div>
        <div class="information-c">
            <h2 class="title title-style">Historia</h2>
            <p>El Dr. Luis Salinas González empezó a partir del año 1989 que salió de la rural, ya tenía diseñado el consultorio médico, su idea siempre ha permanecido en las calles 11ava entre Cuenca y Febres Cordero #607, el empezó como una farmacia por
                14 años, la sacó porque aparecieron las cadenas de farmacias quienes hacían competencia.</p>
        </div>
        <div class="information-c grid-2c flex-center">
            <div class="picture">
                <img src="assets/img/img.png" alt="">
            </div>
            <div class="information">
                <h2 class="title title-style">Visión</h2>
                <p>El negocio que siga creciendo, hacer más grande el consultorio. La información estaría compartida con todos.</p>
            </div>
        </div>
        <div class="information-c grid-2c flex-center">
            <div class="information">
                <h2 class="title title-style">Objetivos</h2>
                <ul class="objetivos">
                    <li>
                        Ser un médico, ayudar a las personas a que salgan de su situación, ayudarlos en su salud, por eso estudió tantos años, ha tratado problemas leves y severos.
                    </li>
                    <li>
                        Dar un tratamiento adecuado para que le haga efecto al paciente y no le produzca alguna reacción desfavorable.
                    </li>
                    <li>
                        Saber valorar a un paciente.
                    </li>
                    <li>
                        Tener un buen carisma con los pacientes.
                    </li>
                </ul>
            </div>
            <div class="picture">
                <img src="assets/img/img3.png" alt="">
            </div>
        </div>
        <div class="ubicacion">
            <div class="flex-center">
                <h2 class="txt-center title-style" style="margin:20px 0">Ubicacion</h2>
            </div>
            <div class="frame flex-center">
                <iframe class="" src="https://www.google.com/maps/embed?pb=!4v1574202768772!6m8!1m7!1sO0eGHQpwTVmo5gvHIXjCYA!2m2!1d-2.196516775664588!2d-79.90926775132641!3f97.69!4f-7.400000000000006!5f0.7820865974627469" width="600" height="450" frameborder="0" style="border:0;"
                    allowfullscreen=""></iframe>
            </div>
        </div>
    </main>
<?php include('footer.php'); ?>
</body>

</html>
<script type="text/javascript">
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