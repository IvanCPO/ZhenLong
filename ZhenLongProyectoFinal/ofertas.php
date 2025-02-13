<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZhenLong</title>
  <link rel="stylesheet" href="./css/style.css">
  <script defer src="scripts/script.js"></script>
</head>

<body>
  <?php include 'comun/navbar.php'; ?>
  <main>
    <div class="padding_control">
      <div>
        <div class="novedades-container">
          <h2>Ofertas de la semana</h2>
          <div class="novedades-list">
            <div class="novedad">
              <div class="novedad-content">
                <img src="./img/ofertas/sopaAcelgas.png" alt="Sopa de acelgas">
                <div class="novedad-text">
                  <h3>Sopa de Acelga y Setas Shiitake</h3>
                  <p>Un caldo claro y reconfortante, con acelga fresca y setas shiitake, cocinados con jengibre y un toque de
                    salsa de soja.
                    Un primer plato ligero y lleno de sabor.</p>
                  <span class="precio">€5,00</span>
                </div>
              </div>
            </div>

            <div class="novedad">
              <div class="novedad-content">
                <div class="novedad-text">
                  <h3>Bao hecho a mano</h3>
                  <p>Suave panecillo al vapor relleno de cerdo y verduras.</p>
                  <span class="precio">€6,50</span>
                </div>
                <img src="./img/ofertas/baoMano.png" alt="Bao hecho a mano">
              </div>
            </div>

            <div class="novedad">
              <div class="novedad-content">
                <img src="./img/ofertas/terneraOstras.png" alt="Ternera con salsa de otras">
                <div class="novedad-text">
                  <h3>Ternera Salteada con Pimientos y Salsa de Ostras</h3>
                  <p>Ternera en trozos, salteada con pimientos rojos y cebollas en una salsa de ostras suave.</p>
                  <span class="precio">€10,80</span>
                </div>
              </div>
            </div>

            <div class="novedad">
              <div class="novedad-content">
                <div class="novedad-text">
                  <h3>Tarta de Sésamo y Frambuesa</h3>
                  <p>Tarta con base de galleta, crema de sésamo y una capa de frambuesas frescas.
                  </p>
                  <span class="precio">€4,50</span>
                </div>
                <img src="./img/ofertas/tartaFrambuesa.png" alt="Tarta frambuesa">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include 'comun/footer.php'; ?>
</body>

</html>