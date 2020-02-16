<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <title>Trabaja</title>
    <!---<link rel="stylesheet" href="./assets/css/card.css">--->
<style>
  .emp{
    color:blue;
  }
  .rech{
    color:red;
  }
  .pos{
    color:teal;
  }
</style>
</head>
<body>
<div class="main">
  <h1><?php
    if(!isset($_SESSION)){
      session_start();
    }
    if(isset($_SESSION['A'])){
      echo "Citas";
    }else{
      echo "Mis Citas";
    }
  ?></h1>
  <ul class="cards">
    <?php
      foreach($result as $rs):
    ?>
    
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="./assets/img/cradImg.webp"></div>
        <div class="card_content">
          <h2 class="card_title">Descripcion de Sintomas</h2>
          <p class="card_text"><?php echo $rs['observaciones']?></p>
          <h5 >Estado:</h3><?php
            if($rs['estado']=='E'){
              echo "<h5 class='emp'>En espera</h3>";
            }elseif($rs['estado']=='R'){
                echo "<h5 class='rech'>Rechazada</h3>";
            }else{
                echo "<h5 class='pos'>Aceptada</h3>";
            }
          ?>
          <?php
            if(isset($_SESSION['A'])){
              echo "<a class='btn card_btn' href='index.php?c=Admin&a=updateEstado&es=A&ci=".$rs['ci']."'>Atender</a>";
              echo "<a class='btn card_btn' href='index.php?c=Admin&a=updateEstado&es=E&ci=".$rs['ci']."'>Poner en espera</a>";
              echo "<a class='btn card_btn' href='index.php?c=Admin&a=updateEstado&es=R&ci=".$rs['ci']."'>Rechazar</a>";
            }else{

            }
          ?>
            
        </div>
      </div>
    </li>
  
 
      <?php endforeach;?> 
    </ul>
</div>
   
</body>
</html>