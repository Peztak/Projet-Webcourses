// Création de variable pour chaque bouton du dandeau des cookies
const cookieContainer = document.querySelector(".cookiescontainer");
const cookieBtn = document.querySelector(".cookiesbtnaccept");
const cookieBtnPerso = document.querySelector(".footer-btn");
const cookieBtnRefuse = document.querySelector(".cookiesbtnrefuse");

// Création des fonctions permettant de ne pas réafficher le bandeau lorsqu'une sélection est effectué par l'utilisateur
cookieBtn.addEventListener("click", () => {
    cookieContainer.classList.remove("activeBnr");
    localStorage.setItem("cookieBannerDisplayed", "cookie accepted");
});

cookieBtnRefuse.addEventListener("click", () => {
    cookieContainer.classList.remove("activeBnr");
    localStorage.setItem("cookieBannerDisplayed", "cookie refused");
});
cookieBtnPerso.addEventListener("click", () => {
    cookieContainer.classList.remove("activeBnr");
    localStorage.setItem("cookieBannerDisplayed", "cookie accepted");
});

// Fonction pour gérer le temps d'apparition du bandeau après le chargement d'une page
setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("activeBnr");
    }
}, 2000);

// Informations relatives au premier bouton "En savoir plus"
// Création des variable
var btnPopup = document.getElementById('btnPopup');
var overlay = document.getElementById('overlay');
var btnClose = document.getElementById('btnClose');

// Gestion des événements
btnPopup.addEventListener('click',openModal);

btnClose.addEventListener('click',closePopup);

// Création des fonctions
function openModal() {
	overlay.style.display='block';
}
function closePopup() {
	overlay.style.display='none';
}

// Informations relatives au deuxième bouton "En savoir plus"
// Création des variable
var btnPopup2 = document.getElementById('btnPopup2');
var overlay2 = document.getElementById('overlay2');
var btnClose2 = document.getElementById('btnClose2');

// Gestion des événements
btnPopup2.addEventListener('click',openModal2);

btnClose2.addEventListener('click',closePopup2);

// Création des fonctions
function openModal2() {
	overlay2.style.display='block';
}
function closePopup2() {
	overlay2.style.display='none';
}

// Informations relatives au deuxième bouton "En savoir plus"
// Création des variable
var btnPopup3 = document.getElementById('btnPopup3');
var overlay3 = document.getElementById('overlay3');
var btnClose3 = document.getElementById('btnClose3');

// Gestion des événements
btnPopup3.addEventListener('click',openModal3);

btnClose3.addEventListener('click',closePopup3);

// Création des fonctions
function openModal3() {
	overlay3.style.display='block';
}
function closePopup3() {
	overlay3.style.display='none';
}