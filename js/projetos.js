function openModal(videoSrc, title, description, icons) {
  document.getElementById("modal-video").src = "video/" + videoSrc;
  document.getElementById("modal-title").innerText = title;
  document.getElementById("modal-description").innerText = description;

  const iconsContainer = document.getElementById("modal-icons");
  iconsContainer.innerHTML = "";
  icons.forEach((icon) => {
    let i = document.createElement("i");

    if (icon.startsWith("fa-")) {
      i.className = "fab " + icon; 
    } else {
      i.className = icon;
    }

    iconsContainer.appendChild(i);
  });


  document.getElementById("modal").style.display = "flex";
}

function closeModal() {
  document.getElementById("modal").style.display = "none";
  let video = document.getElementById("modal-video");
  video.pause();
  video.src = "";
}
document.addEventListener("DOMContentLoaded", function () {
  const projectsSection = document.querySelector(".projects");
  const projects = document.querySelectorAll(".project");

  if (!projectsSection || projects.length === 0) return;

  function revealProjects() {
    const sectionTop = projectsSection.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (sectionTop < windowHeight - 100) {
      projects.forEach((project, index) => {
        setTimeout(() => {
          project.classList.add("show");
        }, index * 200);
      });

      window.removeEventListener("scroll", revealProjects);
    }
  }

  window.addEventListener("scroll", revealProjects);
  revealProjects(); 
});
