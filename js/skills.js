document.addEventListener("DOMContentLoaded", function () {
  const skills = document.querySelectorAll(".skill");

  function showSkills() {
    skills.forEach((skill, index) => {
      setTimeout(() => {
        skill.classList.add("show");
      }, index * 200);
    });
  }

  window.addEventListener("scroll", function () {
    const skillsSection = document.querySelector(".skills");
    const sectionTop = skillsSection.offsetTop;
    if (window.scrollY + window.innerHeight > sectionTop + 100) {
      showSkills();
    }
  });
});


document.addEventListener("DOMContentLoaded", function () {
  const skills = document.querySelectorAll(".skill");

  // Animação ao rolar a página
  function revealSkills() {
    skills.forEach((skill) => {
      const skillPosition = skill.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      if (skillPosition < windowHeight - 50) {
        skill.classList.add("show");
      }
    });
  }

  window.addEventListener("scroll", revealSkills);
  revealSkills(); // Chama a função ao carregar a página
});
