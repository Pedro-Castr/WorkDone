const navbarButton = document.getElementById('navbar');
const sidebar = document.getElementById('sidebar');

// Mostra a barra lateral e altera a aparência do botão navbar
navbarButton.addEventListener('click', function() {
    sidebar.classList.add('active');
    navbarButton.classList.add('active'); // Adiciona o estado ativo ao botão
});

// Detecta cliques fora da barra lateral
document.addEventListener('click', function(event) {
    const isClickInsideSidebar = sidebar.contains(event.target);
    const isClickOnNavbarButton = navbarButton.contains(event.target);

    // Se o clique for fora da barra lateral e do botão navbar
    if (!isClickInsideSidebar && !isClickOnNavbarButton) {
        sidebar.classList.remove('active');
        navbarButton.classList.remove('active'); // Remove o estado ativo do botão
    }
});