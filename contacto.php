<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <?php
  include "cabecera.php";
  ?>

  <?php
  include "menu.php";
  ?>

  <div class="requisito">
    <br><br>
    <h1 class="ancho margen centrar">Request now</h1>
  </div>
  <br>
  <div class="info_contacto ancho centrar margen">
    <h3 class="verdecito">Beautifully designed, print-ready massage gift certificate</h3>
    <br>
    <p>Leave your personal data, phone, select the desirable service <br> and suitable time. Leave a request and check the email.</p>
  </div>
  <br><br>
  <div class="cont_formulario ancho margen centrar">
    <form action="#" method="get">

      <div class="cont_form_izq">
        <input class="form" type="text" id="email" placeholder="Enter your email:">
        <br>
        <select class="form" name="servicios" id="servicios">
          <option value="">Select Service:</option>
          <option value="Relaxing_Massage">Relaxing Massage</option>
          <option value="Deep_Tissue_Massage">Deep Tissue Massage</option>
          <option value="Hot_Stone_Massage">Hot Stone Massage</option>
        </select>
      </div>

      <div class="cont_form_der">
        <input class="form" type="text" id="telefono" placeholder="Enter your phone:">
        <br>
        <select class="form" name="horario" id="horario">
          <option value="">Select time:</option>
          <option value="9am">9:00 AM</option>
          <option value="10am">10:00 AM</option>
          <option value="11am">11:00 AM</option>
          <option value="12pm">12:00 PM</option>
          <option value="1pm">1:00 PM</option>
          <option value="2pm">2:00 PM</option>
          <option value="3pm">3:00 PM</option>
          <option value="4pm">4:00 PM</option>
          <option value="5pm">5:00 PM</option>
          <option value="6pm">6:00 PM</option>
        </select>
      </div>

      <br>

      <button type="submit" class="btn_formulario negritas">Leave a Request</button>

    </form>
  </div>

  <?php
  include "pie.php";
  ?>

</body>
</html>