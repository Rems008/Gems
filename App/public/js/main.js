// FUNCTION BANDEAU TEXTE

const bandeauText = document.querySelector(".bandeau-text");

function bandeauChange() {
  bandeauText.innerHTML = "RÈGLEMENT 3 FOIS SANS FRAIS DÉS 300 €";
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

window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    navScroll.classList.add("scroll");
  } else {
    navScroll.classList.remove("scroll");
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
