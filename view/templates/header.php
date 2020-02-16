<?php session_start();?>
<link rel="icon" href="assets/img/logo.png">
<style>
.dropdown{
  position: relative;
  display: inline-block;
}
.dropdown-content {
    margin:8px -28px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 100px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius:10px ;
}
.dropdown-content a {
  padding: 12px 10px;
  display: block;
}
/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #94FFF6;border-radius:10px ;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
<header>
        <div class="cabecera">
            <a href="index.html" id="logo">Consultorio Médico Luis Salinas</a>
            <nav class="nav">
                <ul class="list-menu ls-none">
                    <li id="inicio"><a href="index.php?">Inicio</a></li>
                    <li id="contac" ><a href="index.php?a=static&s=contac">Contacto</a></li>
                    <li id="somos"><a href="index.php?a=static&s=about">¿Quiénes somos?</a></li>
                    <li id="citas" class="dropdown"><a href="#">Citas</a>
                    <div class="dropdown-content">
                        <a href="index.php?a=dynamic&d=form">Nueva Cita</a>
                        <a href="index.php?a=dynamic&d=misCitas">Mis Citas</a>
                    </div>
                    </li>
                    <!---<li><a href="trabaja.php">Trabaja</a></li>--->
                    <li><?php
                        if(isset($_SESSION['C'])){
                            echo "<a onclick='cerrar();'>".$_SESSION['C']."</a>";
                        }elseif(isset($_SESSION['A'])){
                            echo "<a onclick='cerrar();'>".$_SESSION['C']."</a>";
                        }else{
                            echo "<a href='index.php?a=dynamic&d=login'>LOGIN</a>";
                        }
                    ?></li>
                </ul>
            </nav>
        </div>
    </header>