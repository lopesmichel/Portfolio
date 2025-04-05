document.addEventListener("DOMContentLoaded", function () {
  const skillsSection = document.querySelector(".skills");
  const skills = document.querySelectorAll(".skill");

  if (!skillsSection || skills.length === 0) return;

  function revealSkills() {
    const sectionTop = skillsSection.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (sectionTop < windowHeight - 100) {
      skills.forEach((skill, index) => {
        setTimeout(() => {
          skill.classList.add("show");
        }, index * 200);
      });

      // Remove o evento de scroll após a animação ser ativada
      window.removeEventListener("scroll", revealSkills);
    }
  }

  window.addEventListener("scroll", revealSkills);
  revealSkills(); // Chama a função ao carregar a página
});
