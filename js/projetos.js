function openModal(videoSrc, title, description, icons) {
  document.getElementById("modal-video").src = "video/" + videoSrc;
  document.getElementById("modal-title").innerText = title;
  document.getElementById("modal-description").innerText = description;

  const iconsContainer = document.getElementById("modal-icons");
  iconsContainer.innerHTML = "";
  icons.forEach((icon) => {
    let i = document.createElement("i");
    i.className = "fa-brands " + icon;
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
