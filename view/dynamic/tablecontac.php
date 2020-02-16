<!DOCTYPE html>
<html lang="es">
 <link rel="icon" href="assets/img/logo.png">
<head>
<?php include('librerias.php'); ?>
<meta charset="UTF-8">

<title><?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_SESSION['A'])){
        echo "Lista de Contactos";
    }else{
        echo "Contactenos";
    }
?></title>
<style>
.container-table{
    padding: 10px 60px;
}
#main-container{
	margin: 40px auto;
	width: 90%;
}

table{
	background-color: white;
	text-align: left;
	border-collapse: collapse;
	width: 100%;
}
th, td{
    text-align: center;
    padding: 20px;
    border: solid 1px #0F362D;
}
thead{
	background-color: #2980B9 ;
	border-bottom: solid 2px #0F362D;
	color: white;
}
tr:nth-child(even){
	background-color: #ddd;
}

tr:hover td{
	background-color: #3498DB ;
	color: white;
}
</style>
</head>
<body>
    

<div class="container-table">
    <h1>PLANES DISPONIBLES</h1>
    <div id="main-container">
        <table>
            <tbody>
            <thead>

            
            <tr>
                <th>Correo</th><th>Mensaje</th>
            </tr>
            </thead>
            <?php
            foreach ($result as $gp):
                ?>
                <tr>
                    <td><?php echo($gp['nombre']); ?></td>
                    <td><?php echo($gp['mensaje']); ?></td>

                   
                </tr>
                    <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>