<?php session_start();?>
<link rel="icon" href="assets/img/logo.png">
<header>
        <div class="cabecera">
            <a href="index.php?" id="logo">Consultorio Médico Luis Salinas</a>
            <nav class="nav">
                <ul class="list-menu ls-none">
                    <li id="inicio" ><a href="index.php?">Inicio</a></li>
                    <li id="contac"><a href="index.php?a=static&s=contac">Contacto</a></li>
                    <li id="somos"><a href="index.php?a=static&s=about">¿Quiénes somos?</a></li>
                    <li id="citas"><a href="index.php?a=dynamic&d=form">Citas</a></li>
                    <!---<li><a href="trabaja.php">Trabaja</a></li>--->
                    <li><?php
                        if(!empty($_SESSION['C'])){
                            echo "<a onclick='cerrar();'>".$_SESSION['C']."</a>";
                        }elseif(isset($_SESSION['A'])){
                            echo "<a onclick='cerrar();'>".$_SESSION['A']."</a>";
                        }else{
                            echo "<a href='index.php?a=dynamic&d=login'>LOGIN</a>";
                        }
                    ?></li>
                </ul>
            </nav>
        </div>
    </header>