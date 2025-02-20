// =================================================================================================================
//                                                  page Home
// =================================================================================================================

document.addEventListener("DOMContentLoaded", () => {
  if (document.querySelector(".home-container")) {

    // Fonction pour l'animation des cubes de la section nos services

    function cubeMove() {
      const cubeElements = document.querySelectorAll(".cubeNovaneos");
      const serviceElement = document.querySelector(".topServices");

      if (!serviceElement || cubeElements.length === 0) return;

      const observerOptions = {
        root: null,
        threshold: 0.8,
        rootMargin: "0px 0px -5% 0px",
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            cubeElements.forEach((cube) => {
              cube.classList.add("move");
            });

            observer.unobserve(serviceElement);
          }
        });
      }, observerOptions);

      observer.observe(serviceElement);
    }

    cubeMove();


    function pourcentUp() {
      const pourcentElements = [
        document.querySelector("#pourcentBlock1"),
        document.querySelector("#pourcentBlock2"),
        document.querySelector("#pourcentBlock3"),
        document.querySelector("#pourcentBlock4"),
      ];

      const observerOptions = {
        root: null,
        threshold: 0.9,
        rootMargin: "0px 0px -5% 0px",
      };

      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const pourcentElement = entry.target;

            const targetNumber = pourcentElement.querySelector("#number");

            if (pourcentElement.id === "pourcentBlock1") {
              animateCounter(targetNumber, 78, 10);
            } else if (pourcentElement.id === "pourcentBlock2") {
              animateCounter(targetNumber, 93, 14);
            } else if (pourcentElement.id === "pourcentBlock3") {
              animateCounter(targetNumber, 62, 22);
            } else if (pourcentElement.id === "pourcentBlock4") {
              animateCounter(targetNumber, 90, 22);
            }

            observer.unobserve(pourcentElement); // Stopper l'observation après le déclenchement
          }
        });
      }, observerOptions);

      // Observer chaque élément de compétence
      pourcentElements.forEach((number) => {
        observer.observe(number);
      });

      // Fonction générique pour animer les compteurs
      function animateCounter(targetElement, maxValue, intervalTime) {
        let counter = 0;

        if (!targetElement) {
          console.error("Élément introuvable pour l'animation.");
          return;
        }

        const interval = setInterval(() => {
          if (counter >= maxValue) {
            clearInterval(interval);
          } else {
            counter++;
            targetElement.innerHTML = counter + "%";
          }
        }, intervalTime);
      }
    }

    pourcentUp();

    // Animations section support

    function blockDown() {
      const blockElements = document.querySelectorAll(".blockSupportAlone, .blockAvantageAlone");

      const observerOptions = {
        root: null,
        threshold: 0.9,
        rootMargin: "0px 0px -5% 0px",
      };

      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const blockElement = entry.target;

            // Lancer l'animation pour le block visible
            blockElement.classList.add("down");

            // Stopper l'observation après le déclenchement
            observer.unobserve(blockElement);
          }
        });
      }, observerOptions);

      // Ajouter l'observateur à chaque block
      blockElements.forEach((blockElement) => {
        observer.observe(blockElement);
      });
    }
    blockDown();
  }
});
