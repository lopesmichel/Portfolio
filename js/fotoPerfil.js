document
  .querySelector(".profile-img")
  .addEventListener("mouseover", function () {
    // Troca para outra imagem ao passar o mouse
    const images = ["img/logo2 (2).png", "img/logo2 (2).png"]; // Adicione suas imagens aqui
    let currentImage = this.src;
    let nextImage = currentImage === images[0] ? images[1] : images[0];
    this.src = nextImage;

    // Adiciona a classe de animação
    this.classList.add("change-image");
  });

// Remove a classe de animação após a transição
document
  .querySelector(".profile-img")
  .addEventListener("animationend", function () {
    this.classList.remove("change-image");
  });
