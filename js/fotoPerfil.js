document
  .querySelector(".profile-img")
  .addEventListener("mouseover", function () {
    const images = ["img/logo2 (2).png", "img/logo2 (2).png"]; 
    let currentImage = this.src;
    let nextImage = currentImage === images[0] ? images[1] : images[0];
    this.src = nextImage; 


    this.classList.add("change-image");
  });


document
  .querySelector(".profile-img")
  .addEventListener("animationend", function () {
    this.classList.remove("change-image");
  });
