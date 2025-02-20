document.addEventListener("DOMContentLoaded", function () {
  const pageBlog = document.querySelector("#primary");
    // Vérifie si l'on est sur la page "Blog"
  if (document.body.classList.contains("blog")) {
    pageBlog.classList.add("blogStyle");
  }
});
