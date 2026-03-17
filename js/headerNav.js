const navLinks = document.querySelectorAll(".header__nav a");

navLinks.forEach((link) => {
  link.addEventListener("click", function () {
    navLinks.forEach((nav) => nav.classList.remove("active"));

    this.classList.add("active");
  });
});
