<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ZhenLong - Restaurante Chino</title>
  <link rel="stylesheet" href="./css/style.css">
  <script defer src="scripts/script.js"></script>
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>

<body>
  <?php include './comun/navbar.php'; ?>

  <main>
    <div class="padding_control">
      <div class="banner-container">
        <div class="notice">
          <h1>Comida china en Santiago</h1>
          <p>Llámanos y encarga tu pedido</p>
          <button id="botonConsultar">Consultar</button>
        </div>
      </div>
    </div>

    <div class="padding_control_platos">
      <div id="div_contenedor_categorias">
        <h1>Platos</h1>
        <p>Descubre nuestra variedad de platos pensados para todos los gustos...</p>
        <div class="catalog_grid">
          <a href="#entrantes" class="catalog_item">
            <div class="catalog_overlay">
              <p class="catalog_text">Entrantes</p>
            </div>
            <img src="img/categorias/arrozJazmin.png" alt="Entrantes">
          </a>

          <a href="#primeros-platos" class="catalog_item">
            <div class="catalog_overlay">
              <p class="catalog_text">Primeros Platos</p>
            </div>
            <img src="img/categorias/dumblingsCerdo.png" alt="Primeros platos">
          </a>

          <a href="#segundos-platos" class="catalog_item">
            <div class="catalog_overlay">
              <p class="catalog_text">Segundos Platos</p>
            </div>
            <img src="img/categorias/polloCurry.png" alt="Segundos platos">
          </a>

          <a href="#acompañamientos" class="catalog_item">
            <div class="catalog_overlay">
              <p class="catalog_text">Acompañamientos</p>
            </div>
            <img src="img/categorias/panChino.png" alt="Acompañamientos">
          </a>
          <a href="#bebidas" class="catalog_item">
            <div class="catalog_overlay">
              <p class="catalog_text">Bebidas</p>
            </div>
            <img src="img/categorias/refrescos.png" alt="Bebidas">
          </a>
          <a href="#postres" class="catalog_item">
            <div class="catalog_overlay">
              <p class="catalog_text">Postres</p>
            </div>
            <img src="img/categorias/tartaFresa.png" alt="Postres">
          </a>
        </div>
      </div>
    </div>

    <section id="entrantes">
      <h2>Entrantes</h2>
      <p>Descubre nuestros deliciosos entrantes...</p>
      <ul>
        <li><strong>Bao Hecho a Mano</strong> - €7,80</li>
        <li><strong>Rollitos de Primavera</strong> - €5,00</li>
        <li><strong>Dumplings de Cerdo y Setas</strong> - €6,00</li>
        <li><strong>Sopa de Wonton</strong> - €6,50</li>
        <li><strong>Ensalada de Algas Wakame</strong> - €5,50</li>
      </ul>
    </section>

    <section id="primeros-platos">
      <h2>Primeros Platos</h2>
      <ul>
        <li><strong>Fideos Salteados con Verduras y Tofu</strong> - €8,50</li>
        <li><strong>Sopa de Mariscos al Estilo Cantonés</strong> - €7,50</li>
        <li><strong>Dim Sum de Cangrejo y Gamba</strong> - €7,00</li>
        <li><strong>Sopa de Acelga y Setas Shiitake</strong> - €6,50</li>
        <li><strong>Fideos de Arroz con Gambas y Vegetales al Curry</strong> - €7,50</li>
        <li><strong>Ensalada Templada de Pollo y Sésamo</strong> - €7,00</li>
      </ul>
    </section>

    <section id="segundos-platos">
      <h2>Segundos Platos</h2>
      <ul>
        <li><strong>Pollo a la Naranja y Jengibre</strong> - €11,00</li>
        <li><strong>Ternera Salteada con Pimientos y Salsa de Ostras</strong> - €12,00</li>
        <li><strong>Pescado al Vapor con Jengibre y Cebollino</strong> - €13,00</li>
        <li><strong>Cerdo Agridulce</strong> - €10,50</li>
        <li><strong>Pollo Kung Pao</strong> - €11,50</li>
        <li><strong>Pollo all curry</strong> - €10,50</li>
      </ul>
    </section>

    <section id="acompañamientos">
      <h2>Acompañamientos</h2>
      <ul>
        <li><strong>Arroz Jazmín</strong> - €3,00</li>
        <li><strong>Arroz Frito con Verduras</strong> - €4,00</li>
        <li><strong>Verduras Salteadas con Ajo y Sésamo</strong> - €5,00</li>
        <li><strong>Puré de Boniato con Jengibre</strong> - €4,50</li>
        <li><strong>Pan Chino (2 uds)</strong> - €2,50</li>

      </ul>
    </section>

    <section id="postres">
      <h2>Postres</h2>
      <ul>
        <li><strong>Arroz con Leche al Estilo Chino</strong> - €4,50</li>
        <li><strong>Gelatina de Litchi</strong> - €4,00</li>
        <li><strong>Tarta de Sésamo y Frambuesa</strong> - €5,50</li>
        <li><strong>Tarta de Té Matcha y Frambuesa</strong> - €5,50</li>
        <li><strong>Helado de Sésamo Negro</strong> - €4,50</li>
        <li><strong>Mochi de Mango</strong> - €4,00</li>
      </ul>
    </section>

    <section id="bebidas">
      <h2>Bebidas</h2>
      <ul>
        <li><strong>Té Verde Chino</strong> - €2,50</li>
        <li><strong>Té de Jazmín</strong> - €2,50</li>
        <li><strong>Soda de Litchi</strong> - €3,00</li>
        <li><strong>Cerveza Asiática</strong> - €3,50</li>
        <li><strong>Refrescos</strong> - €3,50</li>
        <li><strong>Agua</strong> - €2,80</li>
      </ul>
    </section>
  </main>

  <?php include 'comun/footer.php'; ?>

</body>

</html>