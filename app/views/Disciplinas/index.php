<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Disciplinas - Cruzeiro do Sul</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="<?php echo BASE_URL; ?>/public/css/TelaDisciplinas/style.css" rel="stylesheet">
</head>
<body>
    <div class="main-wrapper">
        <aside class="sidebar p-3 d-flex flex-column">
            <a href="#" class="d-flex align-items-center mb-4 text-dark text-decoration-none">
                <img src="../../../imagens/LogoEscolar.png" alt="Logo Cruzeiro do Sul">
            </a>

            <div class="d-flex align-items-center mb-4">
                <img src="https://via.placeholder.com/40" class="rounded-circle" alt="Avatar">
                <div class="ms-3">
                    <h6 class="mb-0 fw-bold">Ramon da Silva Ferreira</h6>
                </div>
            </div>

            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-building"></i> Página da instituição</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-person"></i> Ramon da Silva Fer...</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-activity"></i> Atividade</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active"><i class="bi bi-journal-bookmark-fill"></i> Disciplinas</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-diagram-3"></i> Organizações</a>
                </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-calendar-event"></i> Calendário</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-chat-left-text"></i> Mensagens</a>
                </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-sticky"></i> Notas</a>
                </li>
                 <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi bi-tools"></i> Ferramentas</a>
                </li>
            </ul>

            <hr>
            <div>
                 <a href="#" class="nav-link mb-2"><i class="bi bi-box-arrow-right"></i> Fazer logoff</a>
                 <div class="d-flex justify-content-around text-muted small">
                     <a href="#" class="text-muted text-decoration-none">Privacidade</a>
                     <a href="#" class="text-muted text-decoration-none">Termos</a>
                     <a href="#" class="text-muted text-decoration-none">Acessibilidade</a>
                 </div>
            </div>
        </aside>

        <main class="content">
            <div class="container-fluid">
                <div class="row g-4">

                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <a class="navbar-brand">Disciplinas</a>
                            <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="O que você procura?" aria-label="Search">
                            <button class="btn btn-success" type="submit">Buscar</button>
                            </form>
                        </div>
                    </nav>

                    <hr>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card discipline-card">
                            <img src="https://images.unsplash.com/photo-1589873121368-35da4a15a3d7?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNTY3MHwwfDF8c2VhcmNofDI3fHx0cmVlfGVufDB8fHx8MTY3OTg3NDQ2OA&ixlib=rb-4.0.3&q=80&w=400" class="card-img-top" alt="Árvore">
                            <div class="card-body">
                                <h6 class="card-subtitle-code mb-1">veteranos_unipe_20252</h6>
                                <h5 class="card-title">Alunos Veteranos - Unipê</h5>
                                <p class="card-text card-status">Aberto - <a href="#" class="start-link">Começar agora</a></p>
                            </div>
                            <div class="card-footer-custom">
                                <span class="card-instructor"></span>
                                <div class="card-actions">
                                    <i class="bi bi-info-circle"></i>
                                    <i class="bi bi-bookmark-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card discipline-card">
                            <img src="https://via.placeholder.com/400x200.png?text=CRUZEIROHUB" class="card-img-top" alt="Cruzeiro Hub">
                             <div class="card-body">
                                <h6 class="card-subtitle-code mb-1">cruzeirohub_67_20252</h6>
                                <h5 class="card-title">Cruzeiro Hub</h5>
                                <p class="card-text card-status">Aberto</p>
                            </div>
                            <div class="card-footer-custom">
                                <span class="card-instructor"></span>
                                <div class="card-actions">
                                    <i class="bi bi-info-circle"></i>
                                    <i class="bi bi-bookmark-plus"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card discipline-card">
                            <div class="card-img-container">
                                <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNTY3MHwwfDF8c2VhcmNofDF8fGNvZGluZ3xlbnwwfHx8fDE2Nzk4NzQ1MTg&ixlib=rb-4.0.3&q=80&w=400" class="card-img-top" alt="Código">
                                <div class="card-img-overlay-icon">
                                    <i class="bi bi-mortarboard"></i>
                                </div>
                            </div>
                             <div class="card-body">
                                <h6 class="card-subtitle-code mb-1">2154182</h6>
                                <h5 class="card-title">Engenharia de Software - B...</h5>
                                <p class="card-text card-status">Aberto</p>
                            </div>
                           <div class="card-footer-custom">
                                <span class="card-instructor">Fabrício Oliveira de Araujo</span>
                                <div class="card-actions">
                                    <i class="bi bi-info-circle"></i>
                                    <i class="bi bi-bookmark-plus"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card discipline-card">
                            <img src="https://images.unsplash.com/photo-1632571401012-e5a8915c2d36?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNTY3MHwwfDF8c2VhcmNofDF8fGVpbnN0ZWlufGVufDB8fHx8MTY3OTg3NDU3OQ&ixlib=rb-4.0.3&q=80&w=400" class="card-img-top" alt="Fórmula">
                            <div class="card-body">
                                <h6 class="card-subtitle-code mb-1">CVCS_2158014</h6>
                                <h5 class="card-title">Matemática Aplicada - 80h...</h5>
                                <p class="card-text card-status">Aberto - <a href="#" class="start-link">Começar agora</a></p>
                            </div>
                            <div class="card-footer-custom">
                                <span class="card-instructor">Vários instrutores</span>
                                <div class="card-actions">
                                    <i class="bi bi-info-circle"></i>
                                    <i class="bi bi-bookmark-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card discipline-card">
                             <img src="https://images.unsplash.com/photo-1542744095-291d1f67b221?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNTY3MHwwfDF8c2VhcmNofDJ8fGRhdGElMjBhbmFseXNpc3xlbnwwfHx8fDE2Nzk4NzQ2MTg&ixlib=rb-4.0.3&q=80&w=400" class="card-img-top" alt="Gráficos">
                             <div class="card-body">
                                <h6 class="card-subtitle-code mb-1">CVCS_2158030</h6>
                                <h5 class="card-title">Modelagem de Dados - 80h...</h5>
                                <p class="card-text card-status">Aberto</p>
                            </div>
                           <div class="card-footer-custom">
                                <span class="card-instructor">Vários instrutores</span>
                                <div class="card-actions">
                                    <i class="bi bi-info-circle"></i>
                                    <i class="bi bi-bookmark-plus"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card discipline-card">
                            <div class="card-img-container">
                                <img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNTY3MHwwfDF8c2VhcmNofDF8fGNvZGluZ3xlbnwwfHx8fDE2Nzk4NzQ1MTg&ixlib=rb-4.0.3&q=80&w=400" class="card-img-top" alt="Código">
                                <div class="card-img-overlay-icon">
                                    <i class="bi bi-mortarboard"></i>
                                </div>
                            </div>
                             <div class="card-body">
                                <h6 class="card-subtitle-code mb-1">2154183</h6>
                                <h5 class="card-title">Programação Web - B...</h5>
                                <p class="card-text card-status">Aberto</p>
                            </div>
                           <div class="card-footer-custom">
                                <span class="card-instructor">Jeofton Costa Melo</span>
                                <div class="card-actions">
                                    <i class="bi bi-info-circle"></i>
                                    <i class="bi bi-bookmark-plus"></i>
                                    <i class="bi bi-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
            </div>
        </main>
    </div>
    <script src="<?php echo BASE_URL; ?>/public/js/TelaDisciplinas/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>