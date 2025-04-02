document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector(".contact-form");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Evita o envio padrão do formulário

        const name = form.querySelector("input[type='text']").value.trim();
        const email = form.querySelector("input[type='email']").value.trim();
        const phone = form.querySelector("input[type='tel']").value.trim();
        const message = form.querySelector("textarea").value.trim();

        if (name === "" || email === "" || phone === "" || message === "") {
            alert("Por favor, preencha todos os campos!");
            return;
        }

        if (!validateEmail(email)) {
            alert("Por favor, insira um e-mail válido!");
            return;
        }

        alert("Mensagem enviada com sucesso!");
        form.reset(); // Limpa os campos após o envio
    });

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
