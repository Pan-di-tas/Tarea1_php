<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarea1</title>
  <link rel="stylesheet" href="style.css">
  <meta name="description" content="Maquetacion usando php">
</head>
<body>

  <?php
  include "cabecera.php";
  ?>

  <?php
  include "menu.php";
  ?>

  <div class="cont_fondo ancho margen centrar">
    <h1 class="negritas">Relaxation</h1>
    <br>
    <p>come to us right now</p>
    <br>
    <a href="#" class="btn_azul">book Now</a>
  </div>

  <br>

  <div class="cont_info margen ancho centrar">
    <h2 class="verdecito">Plunge into the world of <br> relaxation with us</h2>
    <br>
    <p class="centrar verdecito2">We invite you to visit the spa paradise and feel the power of relaxation. <br> The unique experts will do their best for you.</p>
    <br>
    <div class="cont_info_uno">
      <img src="img/foto1.jpg" alt="foto1">
      <br>
      <h3 class="azulfuerte">High-quality services</h3>
      <p>The best receptionists will put you through the world of potiteness, professiinalism, deep calmness and high-quility services.</p>
    </div>
    <div class="cont_info_dos">
      <img src="img/foto2.jpg" alt="foto2">
      <br>
      <h3 class="azulfuerte">Paradise atmosphere</h3>
      <br>
      <p>Feel the wonderfull atmosphere of beauty, pleasant colors, tasty aromas and feel free to have a relax</p>
    </div>
    <div class="cont_info_tres">
      <img src="img/foto3.jpg" alt="foto3">
      <br>
      <h3 class="azulfuerte">Massage to any taste</h3>
      <br>
      <p>Get the qualified treatment in a most preferable way. Trust our experts and experience the best massage.</p>
    </div>
  </div>

  <?php
  include "pie.php"
  ?>

</body>
</html>