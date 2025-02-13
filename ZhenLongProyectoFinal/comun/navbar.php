<header>
    <div id="logo">
        <div>
            <img src="img/LogoDIW.png" alt="Logo ZhenLong" width="150px" />
            <img src="img/zhen.png" alt="Logo ZhenLong" width="150px" />
            <img src="img/long.png" alt="Logo ZhenLong" width="150px" />
        </div>
        <form role="search" id="searchForm">
            <input
                type="search"
                id="searchInput"
                placeholder="¿Buscas algo en específico?"
                aria-label="search" />
            <button type="submit" id="searchButton">Buscar</button>
        </form>
        <div id="errorMessage">No se encontraron resultados.</div>

    </div>
</header>

<nav>
    <div>
        <ul>
            <li>
                <div class="select-container" id="idSelectWrapper">
                    <div id="idSelectNavbar" class="select">
                        <span id="selectedOption">Categorías</span>
                        <img src="img/desplegable.png" alt="arrow" class="arrow-icon" />
                    </div>
                    <ul id="selectOptions" class="options-list">
                        <li><a href="index.php#entrantes">Entrantes</a></li>
                        <li><a href="index.php#primeros-platos">Primeros Platos</a></li>
                        <li><a href="index.php#segundos-platos">Segundos Platos</a></li>
                        <li><a href="index.php#acompañamientos">Acompañamientos</a></li>
                        <li><a href="index.php#postres">Postres</a></li>
                        <li><a href="index.php#bebidas">Bebidas</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="../index.php">Inicio</a></li>
            <li><a href="../ofertas.php">Ofertas</a></li>
            <li><a href="../novedades.php">Novedades</a></li>
            <li><a href="../outlet.php">Outlet</a></li>
        </ul>
    </div>
</nav>