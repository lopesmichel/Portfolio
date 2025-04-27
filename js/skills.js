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


      window.removeEventListener("scroll", revealSkills);
    }
  }

  window.addEventListener("scroll", revealSkills);
  revealSkills(); 
});
