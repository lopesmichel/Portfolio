document.addEventListener("DOMContentLoaded", function () {
  const projects = document.querySelectorAll(".project");
  const prevBtns = document.querySelectorAll(".prev");
  const nextBtns = document.querySelectorAll(".next");

  // Função para mostrar projetos com animação
  function showProjects() {
    projects.forEach((project, index) => {
      setTimeout(() => {
        project.classList.add("show");
      }, index * 200);
    });
  }

  // Mostrar os projetos quando a seção estiver visível
  window.addEventListener("scroll", function () {
    const projectsSection = document.querySelector(".projects");
    if (window.scrollY + window.innerHeight > projectsSection.offsetTop + 100) {
      showProjects();
    }
  });

  // Funções para o carrossel fora do modal
  prevBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      const carousel = btn.closest(".carousel");
      const images = carousel.querySelectorAll("img");
      let activeImage = carousel.querySelector("img.active");
      let currentIndex = Array.from(images).indexOf(activeImage);
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      activeImage.classList.remove("active");
      images[currentIndex].classList.add("active");
    });
  });

  nextBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
      const carousel = btn.closest(".carousel");
      const images = carousel.querySelectorAll("img");
      let activeImage = carousel.querySelector("img.active");
      let currentIndex = Array.from(images).indexOf(activeImage);
      currentIndex = (currentIndex + 1) % images.length;
      activeImage.classList.remove("active");
      images[currentIndex].classList.add("active");
    });
  });

  // Abertura do modal ao clicar na imagem
  const images = document.querySelectorAll(".carousel-images img");
  images.forEach((image) => {
    image.addEventListener("click", function () {
      openModal(image);
    });
  });

  // Função para abrir o modal
  function openModal(image) {
    const modal = document.getElementById("modal");
    const modalImage = document.getElementById("modal-image");
    modal.style.display = "flex";
    modalImage.src = image.src; // Define a imagem do modal como a imagem clicada
    const modalImages = image.closest(".carousel").querySelectorAll("img"); // Todas as imagens do carrossel

    let currentIndex = Array.from(modalImages).indexOf(image);

    window.nextImage = function () {
      currentIndex = (currentIndex + 1) % modalImages.length;
      modalImage.src = modalImages[currentIndex].src;
    };

    window.prevImage = function () {
      currentIndex =
        (currentIndex - 1 + modalImages.length) % modalImages.length;
      modalImage.src = modalImages[currentIndex].src;
    };
  }

  // Fechar o modal
  function closeModal() {
    document.getElementById("modal").style.display = "none";
  }

  window.closeModal = closeModal;
});
