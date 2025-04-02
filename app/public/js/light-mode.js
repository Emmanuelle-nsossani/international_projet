// Sélectionne le bouton du mode sombre/clair
const toggleSwitch = document.getElementById('theme-toggle');

// Fonction pour activer ou désactiver le mode clair
const toggleTheme = () => {
    if (toggleSwitch.checked) {
        // Utilisation de GSAP pour animer l'ajout de la classe "light-mode"
        gsap.to('body', {
            duration: 0.4,
            backgroundColor: "var(--green)",
            onStart: () => document.body.classList.add('light-mode'),
        });
        localStorage.setItem('theme', 'light');
    } else {
        // Utilisation de GSAP pour animer la suppression de la classe "light-mode"
        gsap.to('body', {
            duration: 0.4,
            backgroundColor: "var(--green)",
            onStart: () => document.body.classList.remove('light-mode'),
        });
        localStorage.setItem('theme', 'dark');
    }
};

// Restauration du mode lors du chargement
if (localStorage.getItem('theme') === 'light') {
    document.body.classList.add('light-mode');
    toggleSwitch.checked = true;
} else {
    document.body.classList.remove('light-mode');
}

// Ajout d'un événement de changement pour le bouton
toggleSwitch.addEventListener('change', toggleTheme);
