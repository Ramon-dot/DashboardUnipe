<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/public/css/TelaHome/style.css" rel="stylesheet">
</head>

<body>
    <div class="header-institucional">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMdg51oW37wPYvhxl8VPtTz-PCx5HbIF9HUQ&s" alt="Logo UNIPÊ" class="logo">
        <span class="titulo">UNIPÊ</span>
        <span class="subtitulo">Portal Acadêmico</span>
    </div>

    <nav class="sidebar" id="sidebar">
        <a href="<?php echo BASE_URL; ?>/public/login" target="_blank" class="menu-login" title="Login">
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" style="display:block;" xmlns="http://www.w3.org/2000/svg">
                <circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="2" fill="none" />
                <path d="M4 20c0-4 4-6 8-6s8 2 8 6" stroke="currentColor" stroke-width="2" fill="none" />
            </svg>
            <span class="login-label">Login</span>
        </a>

        <a href="#" class="menu-btn active" data-page="home" title="Página Inicial">
            <span class="icon">&#8962;</span>
            <span class="menu-label">Início</span>
        </a>

        <a href="<?php echo BASE_URL; ?>/public/disciplinas" class="menu-nav-link" title="Minhas Matérias">
            <span class="icon">&#128221;</span>
            <span class="menu-label">Matérias</span>
        </a>

        <a href="#" class="menu-btn" data-page="presenca" title="Lista de Presença">
            <span class="icon">&#128197;</span>
            <span class="menu-label">Presença</span>
        </a>
    </nav>

    <button class="sidebar-toggle" id="sidebarToggle">&#9776;</button>

    <div class="main-content" id="main-content"></div>
    <template id="template-home">
        <div class="header-area">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80" alt="Campus" class="header-img">
            <div class="header-title-main">Bem-vindo ao Portal Acadêmico</div>
        </div>
        <div class="content-area">
            <h1>UNIPÊ – Centro Universitário de João Pessoa</h1>
            <div class="subtitle">Excelência em Ensino Superior desde 1971</div>
            <div class="desc">
                O UNIPÊ é referência em educação na Paraíba, oferecendo cursos de graduação, pós-graduação e extensão.<br>
                Acesse suas matérias, acompanhe sua presença e fique por dentro das novidades acadêmicas.<br><br>
                <b>Explore o portal e aproveite todos os recursos disponíveis para sua vida acadêmica!</b>
            </div>
            <div class="campus-gallery">
                <div class="campus-card">
                    <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=600&q=80" alt="Biblioteca">
                    <div class="campus-info">
                        <div class="campus-title">Biblioteca Central</div>
                        <div class="campus-desc">Ambiente moderno, acervo atualizado e espaços para estudo individual e em grupo.</div>
                    </div>
                </div>
                <div class="campus-card">
                    <img src="https://images.unsplash.com/photo-1503676382389-4809596d5290?auto=format&fit=crop&w=600&q=80" alt="Laboratórios">
                    <div class="campus-info">
                        <div class="campus-title">Laboratórios</div>
                        <div class="campus-desc">Laboratórios de última geração para aulas práticas e projetos de pesquisa.</div>
                    </div>
                </div>
                <div class="campus-card">
                    <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=600&q=80" alt="Auditório">
                    <div class="campus-info">
                        <div class="campus-title">Auditório</div>
                        <div class="campus-desc">Espaço para eventos, palestras, seminários e atividades culturais.</div>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <template id="template-materias">
        <div class="header-area">
            <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?auto=format&fit=crop&w=1200&q=80" alt="Matérias" class="header-img">
            <div class="header-title-main">Minhas Matérias</div>
        </div>
        <div class="breadcrumb">
            <a href="#" class="breadcrumb-link" data-page="home">Início</a> &gt; Matérias
        </div>
        <div class="content-area">
            <h1>Disciplinas em Andamento</h1>
            <div class="desc">
                Aqui você encontra todas as disciplinas em que está matriculado, com acesso rápido a conteúdos, notas e materiais.
            </div>
            <ul class="materia-lista">
                <li>
                    <b>Algoritmos e Programação</b> — Prof. João Silva
                </li>
                <li>
                    <b>Banco de Dados</b> — Profª. Maria Souza
                </li>
                <li>
                    <b>Engenharia de Software</b> — Prof. Carlos Lima
                </li>
            </ul>
        </div>
    </template>

    <template id="template-presenca">
        <div class="header-area">
            <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?auto=format&fit=crop&w=1200&q=80" alt="Presença" class="header-img">
            <div class="header-title-main">Lista de Presença</div>
        </div>
        <div class="breadcrumb">
            <a href="#" class="breadcrumb-link" data-page="home">Início</a> &gt; Presença
        </div>
        <div class="content-area">
            <h1>Frequência</h1>
            <div class="desc">
                Acompanhe sua presença nas aulas e mantenha-se em dia com as exigências acadêmicas.
            </div>
            <table class="presenca-table">
                <thead>
                    <tr>
                        <th>Disciplina</th>
                        <th>Presenças</th>
                        <th>Faltas</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Algoritmos e Programação</td>
                        <td class="centro">18</td>
                        <td class="centro">2</td>
                    </tr>
                    <tr>
                        <td>Banco de Dados</td>
                        <td class="centro">20</td>
                        <td class="centro">0</td>
                    </tr>
                    <tr>
                        <td>Engenharia de Software</td>
                        <td class="centro">17</td>
                        <td class="centro">3</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </template>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL; ?>/public/js/TelaHome/script.js"></script>
</body>

</html>