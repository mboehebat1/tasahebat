document.querySelector(".menu-toggle").addEventListener("click", function () {
    this.classList.toggle("active");
    document.querySelector("nav").classList.toggle("active");
  });