<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIPE - Portal Acadêmico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
</head>
<body>
     Sidebar 
    <div class="sidebar">
         User Profile 
        <div class="user-profile">
            <div class="d-flex align-items-center">
                <div class="profile-avatar">
                    <i class="bi bi-person-circle"></i>
                </div>
                <div class="ms-2">
                    <div class="user-name">SEU VÍDEO</div>
                    <div class="user-subtitle">Nome do aluno</div>
                </div>
            </div>
        </div>

         Navigation Menu 
        <nav class="nav-menu">
            <div class="menu-section">
                <div class="menu-title">MENU INTERATIVO</div>
                
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-house"></i>
                            Home Page
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-check-circle"></i>
                            Presença
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#cadastrosMenu">
                            <i class="bi bi-folder"></i>
                            Cadastros
                            <i class="bi bi-chevron-down ms-auto"></i>
                        </a>
                        <div class="collapse" id="cadastrosMenu">
                            <ul class="nav flex-column ms-3">
                                <li class="nav-item">
                                    <a class="nav-link sub-link" href="#">Alunos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub-link" href="#">Professores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link sub-link" href="#">Disciplinas</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="menu-section">
                <div class="menu-title">CONFIGURAÇÕES</div>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-gear"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

         Logout 
        <div class="logout-section">
            <a class="nav-link" href="#">
                <i class="bi bi-box-arrow-right"></i>
                Logout Account
            </a>
        </div>
    </div>

     Main Content 
    <div class="main-content">
         Header 
        <header class="header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center">
                            <h1 class="logo">UNIPE</h1>
                            <span class="portal-title ms-3">Portal Acadêmico</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search-container">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="O que você procura?">
                                <button class="btn btn-success" type="button">Buscar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

         Content Area 
        <div class="content-area">
            <div class="container-fluid">
                 Page Title 
                <div class="page-header">
                    <h2 class="page-title">Disciplinas</h2>
                </div>

                 Disciplines Grid 
                <div class="row g-4">
                     Card 1 
                    <div class="col-lg-3 col-md-6">
                        <div class="card discipline-card">
                            <img src="/placeholder.svg?height=150&width=300" class="card-img-top" alt="Disciplina">
                            <div class="card-body">
                                <h6 class="card-title">Álcool, violência - Unipê</h6>
                                <div class="card-meta">
                                    <span class="status-badge status-open">Aberto</span>
                                    <span class="action-text">comece agora</span>
                                </div>
                                <div class="professor-info">
                                    <small class="text-muted">Professor</small>
                                </div>
                            </div>
                        </div>
                    </div>

                     Card 2 
                    <div class="col-lg-3 col-md-6">
                        <div class="card discipline-card">
                            <img src="/placeholder.svg?height=150&width=300" class="card-img-top" alt="Disciplina">
                            <div class="card-body">
                                <h6 class="card-title">Cruzeiro Hub</h6>
                                <div class="card-meta">
                                    <span class="status-badge status-open">Aberto</span>
                                    <span class="action-text">comece agora</span>
                                </div>
                                <div class="professor-info">
                                    <small class="text-muted">Professor</small>
                                </div>
                            </div>
                        </div>
                    </div>

                     Card 3 
                    <div class="col-lg-3 col-md-6">
                        <div class="card discipline-card">
                            <img src="/placeholder.svg?height=150&width=300" class="card-img-top" alt="Disciplina">
                            <div class="card-body">
                                <h6 class="card-title">Engenharia de Software - ILUNIPÊ</h6>
                                <div class="card-meta">
                                    <span class="status-badge status-open">Aberto</span>
                                    <span class="action-text">comece agora</span>
                                </div>
                                <div class="professor-info">
                                    <small class="text-muted">Professor</small>
                                </div>
                            </div>
                        </div>
                    </div>

                     Card 4 
                    <div class="col-lg-3 col-md-6">
                        <div class="card discipline-card">
                            <img src="/placeholder.svg?height=150&width=300" class="card-img-top" alt="Disciplina">
                            <div class="card-body">
                                <h6 class="card-title">Matemática Aplicada - MAT_TI_25.2</h6>
                                <div class="card-meta">
                                    <span class="status-badge status-open">Aberto</span>
                                    <span class="action-text">comece agora</span>
                                </div>
                                <div class="professor-info">
                                    <small class="text-muted">Professor</small>
                                </div>
                            </div>
                        </div>
                    </div>

                     Card 5 
                    <div class="col-lg-3 col-md-6">
                        <div class="card discipline-card">
                            <img src="/placeholder.svg?height=150&width=300" class="card-img-top" alt="Disciplina">
                            <div class="card-body">
                                <h6 class="card-title">Modelagem de Dados - BDI_TI_25.2</h6>
                                <div class="card-meta">
                                    <span class="status-badge status-open">Aberto</span>
                                    <span class="action-text">comece agora</span>
                                </div>
                                <div class="professor-info">
                                    <small class="text-muted">Professor</small>
                                </div>
                            </div>
                        </div>
                    </div>

                     Card 6 
                    <div class="col-lg-3 col-md-6">
                        <div class="card discipline-card">
                            <img src="/placeholder.svg?height=150&width=300" class="card-img-top" alt="Disciplina">
                            <div class="card-body">
                                <h6 class="card-title">Programação Web - 8° - Segunda-feira-Noite</h6>
                                <div class="card-meta">
                                    <span class="status-badge status-open">Aberto</span>
                                    <span class="action-text">comece agora</span>
                                </div>
                                <div class="professor-info">
                                    <small class="text-muted">Professor</small>
                                </div>
                            </div>
                        </div>
                    </div>

                     Card 7 
                    <div class="col-lg-3 col-md-6">
                        <div class="card discipline-card">
                            <img src="/placeholder.svg?height=150&width=300" class="card-img-top" alt="Disciplina">
                            <div class="card-body">
                                <h6 class="card-title">Qualidade de Software - QSI_TI_25.2</h6>
                                <div class="card-meta">
                                    <span class="status-badge status-open">Aberto</span>
                                    <span class="action-text">comece agora</span>
                                </div>
                                <div class="professor-info">
                                    <small class="text-muted">Professor</small>
                                </div>
                            </div>
                        </div>
                    </div>

                     Card 8 
                    <div class="col-lg-3 col-md-6">
                        <div class="card discipline-card">
                            <img src="/placeholder.svg?height=150&width=300" class="card-img-top" alt="Disciplina">
                            <div class="card-body">
                                <h6 class="card-title">Sistemas Operacionais - Data - 19/106</h6>
                                <div class="card-meta">
                                    <span class="status-badge status-open">Aberto</span>
                                    <span class="action-text">comece agora</span>
                                </div>
                                <div class="professor-info">
                                    <small class="text-muted">Professor</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
