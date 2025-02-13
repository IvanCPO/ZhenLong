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
