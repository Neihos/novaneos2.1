// =================================================================================================================
//                                                  burger menu
// =================================================================================================================

document.addEventListener("DOMContentLoaded", () => {
  const burgerIcon = document.querySelector(".burgerIcon");
  const crossIcon = document.querySelector(".crossIcon");
  const burgerMenu = document.querySelector(".mobileNav");

  // Fonction pour ouvrir/fermer le menu
  function toggleMenu() {
    burgerMenu.classList.toggle("close");
    const isclose = burgerMenu.classList.contains("close");

    // Met à jour l'affichage des icônes
    crossIcon.classList.toggle("hiddenNow", isclose);
    burgerIcon.classList.toggle("hiddenNow", !isclose);

    // Désactive le scroll quand le menu est ouvert
    document.body.style.overflow = !isclose ? "hidden" : "auto";
  }

  // Fonction pour fermer le menu si la largeur dépasse 767px
  function checkWindowSize() {
    if (window.innerWidth <= 767 && !burgerMenu.classList.contains("close")) {
      burgerMenu.classList.add("close");
      burgerIcon.classList.remove("hiddenNow");
      crossIcon.classList.add("hiddenNow");
      document.body.style.overflow = "auto";
    }
  }

  // Ajoute les événements de clic
  burgerIcon.addEventListener("click", toggleMenu);
  crossIcon.addEventListener("click", toggleMenu);
  window.addEventListener("resize", checkWindowSize);

  // Vérification initiale de la taille de l'écran
  checkWindowSize();
});
