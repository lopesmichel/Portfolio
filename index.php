<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio - Michel Lopes</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="icon" href="img/eu-logo.png" type="img/eu-logo.png">


</head>

<body>
        <button id="menu-toggle" class="menu-toggle">
            <i class="fas fa-bars"></i>
        </button>



        <div class="sidebar">
            <div class="profile">
            <div class="profile-img-container">
            <img src="img/logo2 (2).png" alt="Minha Foto" class="profile-img front">
            <img src="img/eu-logo.png" alt="Minha Foto" class="profile-img back">
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
        <a href="https://wa.me/5511966583814" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
  
    </div>
    </div>

    <main>
        <button class="menu-toggle" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
        </button>

            <section class="hero" id="home">
                <div class="hero-content">
                    <h1>Bem-vindo ao meu Portfólio</h1>
                </div>
            </section>
                
            <section class="about animate-on-scroll" id="about">
                <h2>Sobre Mim</h2>
                <p>
                    Tenho <strong>24 anos</strong> e estou finalizando minha graduação em <strong>Análise e Desenvolvimento de Sistemas</strong> em 2025. Atualmente, atuo com <strong>documentação de projetos</strong>, testes e acompanhamento de <strong>sprints semanais</strong> utilizando metodologias ágeis.
                </p>
                <p>
                    Sou responsável pelo processo de <strong>Scrum</strong>, realizando manutenções e implementações de melhorias em sistemas, sempre trazendo <strong>ideias inovadoras</strong> para novos projetos.
                </p>
                <p>
                    Possuo experiência com <strong>gerenciamento de times de desenvolvimento</strong>, levantamento de requisitos e <strong>otimização de processos internos</strong>, garantindo eficiência e qualidade nas entregas.
                </p>
            </section>

   

        <section class="skills animate-on-scroll animate-right" id="skills">
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


        <section class="projects animate-on-scroll" id="projects"> 
            <h2>Projetos</h2>
            <div class="projects-container">
                <div class="project" onclick="openModal('manual.mp4', 'Manual do Sistema', 'Desenvolvi um manual online com navegação por categorias, índice, busca por palavra-chave e modo escuro. Feito para orientar usuários e facilitar o aprendizado do sistema. Possui área administrativa com CRUD para manter o conteúdo sempre atualizado.', 
                ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-php', 'fas fa-database'])">
                    <video class="project-video" src="video/manual.mp4"  muted loop playsinline poster></video>
                    <div class="overlay">
                        <h3>Manual do Sistema</h3>
                    </div>
                </div>
                <div class="project" onclick="openModal('gc.mp4', 'Portfólio de Marketing', 'Desenvolvi um site portfólio para uma empresa de marketing, destacando suas principais habilidades, serviços e áreas de atuação. O layout é responsivo e pensado para proporcionar uma ótima experiência em qualquer dispositivo. O site também conta com formulário de contato funcional, permitindo que visitantes entrem em contato diretamente por e-mail, facilitando a conversão de leads e fortalecendo a presença digital da marca.', ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-react'])">
                    <video class="project-video" src="video/gc.mp4" muted loop playsinline poster></video>
                    <div class="overlay">
                        <h3>Portfólio de Marketing</h3>
                    </div>
                </div>
                <div class="project" onclick="openModal('tarefas.mp4', 'Gerenciador de Tarefas', 'Desenvolvi um gerenciador de tarefas em React, onde é possível adicionar tarefas com descrição, além de realizar todas as operações de CRUD. Uma solução simples e eficiente para organizar atividades do dia a dia.', ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-react'])">
                    <video class="project-video" src="video/tarefas.mp4" muted loop playsinline poster></video>
                    <div class="overlay">
                        <h3>Gerenciador de Tarefas</h3>
                    </div>
                </div>
                <div class="project" onclick="openModal('jogo.mp4', 'Jogo de Palavras', 'Criei um jogo de adivinhação de palavras usando React. O sistema exibe uma dica e o usuário tem até 3 tentativas para acertar. Se errar a quarta vez, perde o jogo. Ao acertar, ganha pontuação e avança para o próximo tema. Uma experiência interativa e divertida.', ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-react'])">
                    <video class="project-video" src="video/jogo.mp4" muted loop playsinline poster></video>
                    <div class="overlay">
                        <h3>Jogo de Palavras</h3>
                    </div>
                </div>
                <div class="project" onclick="openModal('produtos.mp4', 'Cadastro de Produtos com API', 'Desenvolvi uma interface para cadastro de produtos, com envio de dados via API. Após o envio, é possível visualizar os dados diretamente no Postman, validando a comunicação entre o front-end e a API. Um projeto simples para demonstrar integração com serviços externos.', ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-react'])">
                    <video class="project-video" src="video/produtos.mp4" muted loop playsinline poster></video>
                    <div class="overlay">
                        <h3>Sistema de Cadastro de Produtos</h3>
                </div>
                </div>
                <div class="project" onclick="openModal('restaurante.mp4', 'Cadastro de Produtos com API', 'Criei um site para restaurante com cardápio online e área administrativa. A proposta é melhorar a experiência do cliente no local, oferecendo um acesso rápido ao cardápio, enquanto o adm pode gerenciar os produtos e acessos de forma simples.', ['fa-html5', 'fa-css3-alt', 'fa-js', 'fa-php', 'fas fa-database'])">
                    <video class="project-video" src="video/restaurante.mp4" muted loop playsinline poster></video>
                    <div class="overlay">
                        <h3>Restaurante</h3>
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


        <section class="contact animate-on-scroll" id="contact">
            <h2>Entre em Contato</h2>

          
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

</main>


<script src="js/contato.js"></script>
<script src="js/skills.js"></script>
<script src="js/fotoPerfil.js"></script>
<script src="js/projetos.js"></script>
<script src="js/menu.js"></script>
<script src="js/efeitoScroll.js"></script>

</body>

</html>
