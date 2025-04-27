document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".contact-form");
  const alertBox = document.getElementById("contact-alert");

  form.addEventListener("submit", function (e) {
    e.preventDefault();

    const formData = new FormData(form);
    const name = formData.get("nome").trim();
    const email = formData.get("email").trim();
    const phone = formData.get("telefone").trim();
    const message = formData.get("mensagem").trim();

    if (!name || !email || !phone || !message) {
      showAlert("Por favor, preencha todos os campos!", "error");
      return;
    }

    if (!validateEmail(email)) {
      showAlert("Por favor, insira um e-mail válido!", "error");
      return;
    }

    fetch("enviar-email.php", {
      method: "POST",
      body: formData,
    })
      .then((res) => res.json())
      .then((data) => {
        if (data.success) {
          showAlert(data.message, "success");
          form.reset();
        } else {
          showAlert(data.message, "error");
        }
      })
      .catch((err) => {
        showAlert("Erro ao enviar. Verifique sua conexão.", "error");
        console.error(err);
      });
  });

  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  function showAlert(message, type) {
    alertBox.textContent = message;
    alertBox.className = `contact-alert ${type}`;
    alertBox.style.display = "block";
    alertBox.style.opacity = "1";

    setTimeout(() => {
      alertBox.style.opacity = "0";
      setTimeout(() => {
        alertBox.style.display = "none";
      }, 500);
    }, 4000);
  }
});
