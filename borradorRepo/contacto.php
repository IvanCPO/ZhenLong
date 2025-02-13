<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ZhenLong - Contacto</title>
  <link rel="stylesheet" href="css/style.css" />
  <script defer src="scripts/script.js"></script>
</head>

<body>
  <?php include 'comun/navbar.php'; ?>
  <div class="contacto-container">
    <div class="info-contacto">
      <h3>Ubicación</h3>
      <div class="mapa">
        <img src="./img/mapa.png" alt="Mapa de Santiago" />
      </div>
    </div>
    <div class="formulario-contacto">
      <h3>Formulario de contacto</h3>
      <form>
        <input type="text" placeholder="Nombre" required />
        <input type="tel" placeholder="Teléfono" required />
        <textarea placeholder="Mensaje" rows="4" required></textarea>
        <button type="submit">Enviar</button>
      </form>
    </div>
  </div>
  <?php include 'comun/footer.php'; ?>
</body>

</html>