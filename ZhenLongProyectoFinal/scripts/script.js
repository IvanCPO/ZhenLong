// funcionamiento desplegable navbnar
const options = document.querySelectorAll('#selectOptions li');
const sections = document.querySelectorAll('.catalog_item');

options.forEach((option) => {
  option.addEventListener('click', () => {
    const targetId = option.getAttribute('data-target');

    sections.forEach((section) => {
      section.style.display = 'none';
    });

    const targetSection = document.getElementById(targetId);
    if (targetSection) {
      targetSection.style.display = 'block';
    }

    const selectedOption = document.getElementById('selectedOption');
    selectedOption.textContent = option.textContent;

    document.getElementById('idSelectWrapper').classList.remove('open');
  });
});

document.getElementById('idSelectNavbar').addEventListener('click', () => {
  document.getElementById('idSelectWrapper').classList.toggle('open');
});


//funcionamiento del boton consultar
const botonConsultar = document.querySelector("#botonConsultar");

botonConsultar.addEventListener("click", function () {
  window.location.href = "categorias.php";
});


// funcionamiento del buscador y mensaje de error
document.querySelector('form[role="search"]').addEventListener('submit', function (e) {
    e.preventDefault();

    const input = document.querySelector('input[type="search"]');
    const searchTerm = input.value.trim().toLowerCase();
    const items = ['Entrantes', 'Primeros Platos', 'Segundos Platos', 'Acompañamientos', 'Postres', 'Bebidas'];
    const errorMessage = document.getElementById('errorMessage');
  
    errorMessage.style.display = 'none';

    const match = items.find(item => item.toLowerCase() === searchTerm);

    if (match) {
        window.location.href = `index.php#${match.toLowerCase().replace(/\s+/g, '-')}`;
    } else {

        errorMessage.style.display = 'block';
    }
});
