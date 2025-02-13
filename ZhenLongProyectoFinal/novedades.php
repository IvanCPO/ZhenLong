<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZhenLong - Novedades</title>
  <link rel="stylesheet" href="./css/style.css">
  <script defer src="scripts/script.js"></script>
</head>

<body>

  <?php include 'comun/navbar.php'; ?>
  <div class="novedades-container">
    <h2>Novedades de la semana</h2>
    <div class="novedades-list">
      <div class="novedad">
        <div class="novedad-content">
          <img src="./img/novedades/pollo.jpg" alt="Pollo a la Naranja">
          <div class="novedad-text">
            <h3>Pollo a la Naranja y Jengibre</h3>
            <p>Pollo tierno con una reducción de salsa de naranja, jengibre fresco y un toque de salsa de soja. ¡Un plato lleno de frescura y sabor!</p>
            <span class="precio">€11,00</span>
          </div>
        </div>
      </div>

      <div class="novedad">
        <div class="novedad-content">
          <div class="novedad-text">
            <h3>Dim Sum de Cangrejo y Gamba (6 uds)</h3>
            <p>Deliciosos dim sum rellenos de cangrejo y gamba fresca, acompañados de una ligera salsa de soja. Perfectos para compartir.</p>
            <span class="precio">€7,00</span>
          </div>
          <img src="./img/novedades/dimsum.jpg" alt="Dim Sum de Cangrejo">
        </div>
      </div>

      <div class="novedad">
        <div class="novedad-content">
          <img src="./img/novedades/fideos.jpg" alt="Fideos de Arroz con Gambas">
          <div class="novedad-text">
            <h3>Fideos de Arroz con Gambas y Vegetales al Curry</h3>
            <p>Fideos de arroz finos salteados con gambas y verduras, en una suave salsa de curry que combina un toque de picante con la suavidad de las verduras.</p>
            <span class="precio">€7,50</span>
          </div>
        </div>
      </div>

      <div class="novedad">
        <div class="novedad-content">
          <div class="novedad-text">
            <h3>Gelatina de Litchi</h3>
            <p>Una gelatina suave de litchi, refrescante y delicada para terminar tu comida con un toque ligero y dulce.</p>
            <span class="precio">€4,00</span>
          </div>
          <img src="./img/novedades/lichi.webp" alt="Gelatina de Litchi">
        </div>
      </div>
    </div>
  </div>
  <?php include 'comun/footer.php'; ?>
</body>

</html>