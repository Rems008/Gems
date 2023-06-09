// FUNCTION BANDEAU TEXTE

const bandeauText = document.querySelector(".bandeau-text");

function bandeauChange() {
  bandeauText.innerHTML = "RÈGLEMENT 3 FOIS SANS FRAIS DÈS 300 €";
}
setInterval("bandeauChange()", 7000);

function bandeauChangeInitial() {
  bandeauText.innerHTML =
    "LIVRAISON OFFERTE À PARTIR DE 300 € EN FRANCE MÉTROPOLITAINE";
}
setInterval("bandeauChangeInitial()", 12000);

// FUNCTION DU MENU

// NAV SCROLL

const navScroll = document.querySelector(".nav-titre");
const menuScroll = document.querySelector(".nav-menu");

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    navScroll.classList.add("scroll");
    menuScroll.classList.add("scroll");
  } else {
    navScroll.classList.remove("scroll");
    menuScroll.classList.remove("scroll");
  }
});

// MENU BURGER

const menuBurger = document.querySelector(".burger");
const navMenu = document.querySelector(".nav-menu");

menuBurger.addEventListener("click", (event) => {
  navMenu.classList.toggle("mobile-menu");
  event.preventDefault();
});

navMenu.addEventListener("mouseleave", () => {
  navMenu.classList.remove("mobile-menu");
});

// NAV ACTIVE

const navLien = document.querySelectorAll("nav a");
// Parcourt chaque élément <a> de la barre de navigation
navLien.forEach((lien) => {
  // Vérifie si l'attribut href correspond à la page actuelle
  if (lien.href === window.location.href) {
    lien.classList.add("active");
  }
});

// BTN SUPPRIMER

const btnSup = document.querySelectorAll(".btn-supprimer");

btnSup.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?")) {
      window.location.href = btn.href;
    } else {
      return;
    }
  });
});
