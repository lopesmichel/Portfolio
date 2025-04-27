const toggleButton = document.getElementById("menu-toggle");
const sidebar = document.querySelector(".sidebar");
const menuLinks = document.querySelectorAll(".sidebar nav ul li a");

function toggleSidebar() {
  sidebar.classList.toggle("active");
  document.body.style.overflow = sidebar.classList.contains("active")
    ? "hidden"
    : "auto";
}


toggleButton.addEventListener("click", toggleSidebar);


menuLinks.forEach((link) => {
  link.addEventListener("click", () => {
    if (sidebar.classList.contains("active")) {
      sidebar.classList.remove("active");
      document.body.style.overflow = "auto"; 
    }
  });
});
