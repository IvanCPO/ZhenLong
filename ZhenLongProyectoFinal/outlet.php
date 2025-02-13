<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZhenLong - Novedades</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="scripts/script.js"></script>
</head>

<body>

    <?php include 'comun/navbar.php'; ?>

    <main class="container my-5">
        <h1 class="text-center mb-4">Últimas oportunidades</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <!-- Producto 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/outlet/cerdoAgri.png" class="card-img-top" alt="Cerdo agridulce">
                    <div class="card-body">
                        <h5 class="card-title">Cerdo agridulce</h5>
                        <p class="card-text">Trozos de cerdo crujientes en una suave salsa agridulce, acompañado de
                            arroz blanco.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text"><strong>Precio: 10.50€</strong></p>
                        <button class="btn btn-warning">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <!-- Producto 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/outlet/ensaladaPollo.png" class="card-img-top" alt="Ensalada de pollo">
                    <div class="card-body">
                        <h5 class="card-title">Ensalada Templada de Pollo y Sésamo</h5>
                        <p class="card-text">Tiras de pollo a la parrilla, acompañadas de verduras frescas, aliñadas con
                            una vinagreta ligera de sésamo, acompañadas de semillas de sésamo tostado.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text"><strong>Precio: 7.00€</strong></p>
                        <button class="btn btn-warning">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <!-- Producto 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/outlet/fideosTofu.png" class="card-img-top" alt="Fideos de tofu">
                    <div class="card-body">
                        <h5 class="card-title">Fideos Salteados con Verduras y Tofu (Chao Mian)</h5>
                        <p class="card-text">Fideos finos salteados con tofu, zanahoria, cebollín y pimientos, en una
                            salsa ligera de soja.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text"><strong>Precio: 8.50€</strong></p>
                        <button class="btn btn-warning">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <!-- Producto 4 -->
            <div class="col">
                <div class="card h-100">
                    <img src="img/outlet/heladoSesamo.png" class="card-img-top" alt="Helado de sesamo">
                    <div class="card-body">
                        <h5 class="card-title">Helado de Sésamo Negro</h5>
                        <p class="card-text">Un helado cremoso de sésamo negro, con su característico sabor tostado,
                            perfecto para terminar la comida con un toque exótico y suave.</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text"><strong>Precio: 4.50€</strong></p>
                        <button class="btn btn-warning">Añadir al carrito</button>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php include 'comun/footer.php'; ?>

</body>

</html>