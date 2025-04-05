<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script defer src="scripts.js"></script>
</head>
<body>
   <div class="sidebar">
    <div class="profile">
        <div class="profile-img-container">
            <img src="img/logo2 (2).png" alt="Minha Foto" class="profile-img front">
            <img src="img/eu.png" alt="Minha Foto" class="profile-img back">
        </div>
        <h2>Michel Lopes</h2>
    </div>

    <nav>
        <ul>
            <li><a href="#home">Início</a></li>
            <li><a href="#about">Sobre</a></li>
            <li><a href="#skills">Habilidades</a></li>
            <li><a href="#projects">Projetos</a></li>
            <li><a href="#contact">Contato</a></li>
        </ul>
    </nav>

    <div class="whatsapp">
        <a href="https://wa.me/seunumerodetelefone" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
</div>

    <main>
          <section class="hero">
        <div class="hero-content">
            <h1>Bem-vindo ao meu Portfólio</h1>
        </div>
    </section>
        
        <section class="about" id="about">
            <h2>Sobre Mim</h2>
            <p>Tenho 24 anos e estou finalizando minha graduação em Análise e Desenvolvimento de Sistemas em 2025. Atualmente, atuo com documentação de projetos, testes e acompanhamento de sprints semanais utilizando metodologias ágeis. 
            Além disso, sou responsável pelo processo de Scrum, realizando manutenções e implementações de melhorias em sistemas, sempre trazendo ideias inovadoras para novos projetos. 
            Possuo experiência com gerenciamento de times de desenvolvimento, levantamento de requisitos e otimização de processos internos, garantindo eficiência e qualidade nas entregas.</p>
        </section>

        
        <section class="skills" id="skills">
            <h2>Habilidades</h2>
            <div class="skills-container">
                <div class="skill"><i class="fab fa-html5"></i><p>HTML</p></div>
                <div class="skill"><i class="fab fa-css3-alt"></i><p>CSS</p></div>
                <div class="skill"><i class="fab fa-bootstrap"></i><p>Bootstrap</p></div>
                <div class="skill"><i class="fab fa-wordpress"></i><p>WordPress</p></div>
                <div class="skill"><i class="fab fa-react"></i><p>React</p></div>
                <div class="skill"><i class="fab fa-php"></i><p>PHP</p></div>
                <div class="skill"><i class="fab fa-angular"></i><p>Angular</p></div>
                <div class="skill"><i class="fas fa-paint-brush"></i><p>UI/UX</p></div>
                <div class="skill"><i class="fas fa-database"></i><p>MySQL</p></div>
            </div>
        </section>

        <section class="projects" id="projects"> 
            <h2>Projetos</h2>
            <div class="projects-container">
                <div class="project" onclick="openModal('manual.mp4', 'Manual do Sistema', 'Criei diversas páginas e telas de administração para excluir, editar e remover produtos. Esse projeto foi feito com diversas tecnologias.', ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-react'])">
                    <video class="project-video" src="video/manual.mp4" muted loop></video>
                    <div class="overlay">
                        <h3>Manual do Sistema</h3>
                    </div>
                </div>
                <div class="project" onclick="openModal('gc.mp4', 'Nome do Projeto', 'Descrição breve do projeto explicando sua funcionalidade. Projeto voltado para melhoria de processos internos, utilizando diversas tecnologias.', ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-react'])">
                    <video class="project-video" src="video/gc.mp4" muted loop></video>
                    <div class="overlay">
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="project" onclick="openModal('tarefas.mp4', 'Nome do Projeto', 'Descrição breve do projeto explicando sua funcionalidade. Projeto voltado para melhoria de processos internos, utilizando diversas tecnologias.', ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-react'])">
                    <video class="project-video" src="video/tarefas.mp4" muted loop></video>
                    <div class="overlay">
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="project" onclick="openModal('gc.mp4', 'Nome do Projeto', 'Descrição breve do projeto explicando sua funcionalidade. Projeto voltado para melhoria de processos internos, utilizando diversas tecnologias.', ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-react'])">
                    <video class="project-video" src="video/gc.mp4" muted loop></video>
                    <div class="overlay">
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="project" onclick="openModal('gc.mp4', 'Nome do Projeto', 'Descrição breve do projeto explicando sua funcionalidade. Projeto voltado para melhoria de processos internos, utilizando diversas tecnologias.', ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-react'])">
                    <video class="project-video" src="video/gc.mp4" muted loop></video>
                    <div class="overlay">
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
                <div class="project" onclick="openModal('gc.mp4', 'Nome do Projeto', 'Descrição breve do projeto explicando sua funcionalidade. Projeto voltado para melhoria de processos internos, utilizando diversas tecnologias.', ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-react'])">
                    <video class="project-video" src="video/gc.mp4" muted loop></video>
                    <div class="overlay">
                        <h3>Nome do Projeto</h3>
                    </div>
                </div>
            </div>
        </section>

<!-- Modal -->
<div class="modal" id="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <video id="modal-video" controls autoplay></video>
        <h3 id="modal-title"></h3>
        <p id="modal-description"></p>
        <div class="tech-icons" id="modal-icons"></div>
    </div>
</div>


<section class="contact" id="contact">
    <h2>Entre em Contato</h2>

    <!-- ALERTA DE RETORNO -->
    <div id="contact-alert" class="contact-alert" style="display: none;"></div>

    <div class="contact-container">
        <div class="contact-info">
            <div class="info-item">
                <i class="fas fa-user"></i>
                <p>Michel Lopes</p>
            </div>
            <div class="info-item">
                <i class="fas fa-envelope"></i>
                <p>michel.lp@outlook.com</p>
            </div>
            <div class="info-item">
                <i class="fas fa-phone"></i>
                <p>(11) 96658-3814</p>
            </div>
            <div class="info-item">
                <i class="fas fa-map-marker-alt"></i>
                <p>São Paulo - SP</p>
            </div>
        </div>
        <form class="contact-form" id="contact-form">
            <input type="text" name="nome" placeholder="Nome" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="tel" name="telefone" placeholder="Telefone" required>
            <textarea name="mensagem" placeholder="Digite sua mensagem" required></textarea>
            <button type="submit">Enviar</button>
        </form>
    </div>
</section>

<script>
document.querySelector('.contact-form').addEventListener('submit', function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    const alertBox = document.getElementById('contact-alert');

    fetch('enviar-email.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
    if (data.success) {
        showAlert(data.message, 'success');
        document.querySelector('.contact-form').reset();
    } else {
        showAlert(data.message, 'error');
    }
    })

    .catch(err => {
        showAlert('Erro ao enviar. Verifique sua conexão.', 'error');
        console.error(err);
    });

    function showAlert(message, type) {
        alertBox.textContent = message;
        alertBox.className = `contact-alert ${type}`;
        alertBox.style.display = 'block';
        alertBox.style.opacity = '1';

        setTimeout(() => {
            alertBox.style.opacity = '0';
            setTimeout(() => {
                alertBox.style.display = 'none';
            }, 500);
        }, 4000);
    }
});
</script>


</main>


<!-- <script src="js/carroselProjetos.js"></script> !-->
<script src="js/contato.js"></script>
<script src="js/skills.js"></script>
<script src="js/fotoPerfil.js"></script>
<script src="js/projetos.js"></script>

</body>
</html>
