// Récupérer l'élément par son ID
const monElement = document.getElementById('monElement');

// Variables pour stocker les coordonnées du point de départ du déplacement
let deplacementX = 0;
let deplacementY = 0;

// Fonction pour démarrer le déplacement
function demarrerDeplacement(e) {
    // Obtenir les coordonnées de départ du déplacement
    deplacementX = e.clientX - monElement.getBoundingClientRect().left;
    deplacementY = e.clientY - monElement.getBoundingClientRect().top;

    // Ajouter un écouteur d'événement pour le mouvement de la souris
    document.addEventListener('mousemove', deplacerElement);
    
    // Ajouter un écouteur d'événement pour le relâchement de la souris
    document.addEventListener('mouseup', arreterDeplacement);
}

// Fonction pour déplacer l'élément
function deplacerElement(e) {
    // Calculer les nouvelles coordonnées de l'élément en fonction de la position de la souris
    const nouvellePosX = e.clientX - deplacementX;
    const nouvellePosY = e.clientY - deplacementY;

    // Définir les nouvelles coordonnées de l'élément
    monElement.style.left = nouvellePosX + 'px';
    monElement.style.top = nouvellePosY + 'px';
}

// Fonction pour arrêter le déplacement
function arreterDeplacement() {
    // Retirer les écouteurs d'événements pour le mouvement de la souris et le relâchement de la souris
    document.removeEventListener('mousemove', deplacerElement);
    document.removeEventListener('mouseup', arreterDeplacement);
}

// Ajouter un écouteur d'événement pour le clic de souris sur l'élément pour démarrer le déplacement
monElement.addEventListener('mousedown', demarrerDeplacement);

// ______________________________________________PARTIE CONEXION AMINA_____________________________________________________________________________


var nameInput = document.getElementById('name');
var passwordInput = document.getElementById('password');


nameInput.addEventListener('click', function() {
    this.style.background="#F2BD82"; 
});

passwordInput.addEventListener('click', function() {
    this.style.background="#F2BD82"; 
});
var nameInput = document.getElementById('name');
var passwordInput = document.getElementById('password');





// ______________________________________________PARTIE INSCRIPTION AMINA_____________________________________________________________________________


document.addEventListener('DOMContentLoaded', function() {

    var nomInput = document.getElementById('nom');
    var emailInput = document.getElementById('email');
    var passwordInput = document.getElementById('password');

    function changeColorOnClick(event) {
        event.target.style.background="#F2BD82" 
    }

    nomInput.addEventListener('click', changeColorOnClick);
    emailInput.addEventListener('click', changeColorOnClick);
    passwordInput.addEventListener('click', changeColorOnClick);
});