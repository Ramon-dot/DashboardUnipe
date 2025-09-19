<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Presença</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/public/css/Presenca/style.css" rel="stylesheet">
</head>
<body>
    <div class="container py-4">
        <div class="attendance-container p-4">
            <div class="header-number text-center">
                4243841
            </div>
            
            <div class="row">
                <div class="col-12">
                    <div class="student-row">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="student-name">AELLAN LEOPOLDINO NUNES</div>
                                <div class="student-rgm">RGM: 42859018</div>
                            </div>
                            <div class="col-md-2">
                                <span class="date-badge">02/08/2025</span>
                            </div>
                            <div class="col-md-2">
                                <span class="attendance-counter">3 / 15</span>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn btn-attendance" onclick="toggleAttendance(this)">
                                    <i class="bi bi-calendar-check"></i> Aula 1
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="student-row">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="student-name">ARTUR ALEXANDRE DE MELO</div>
                                <div class="student-rgm">RGM: 40023615</div>
                            </div>
                            <div class="col-md-2">
                                <span class="date-badge">12/08/2025</span>
                            </div>
                            <div class="col-md-2">
                                <span class="attendance-counter">6 / 15</span>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn btn-attendance present" onclick="toggleAttendance(this)">
                                    <i class="bi bi-check-circle"></i> Presente
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="student-row">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="student-name">BRAZ CARMELITO DE SOUSA MARQUES NETO</div>
                                <div class="student-rgm">RGM: 36676934</div>
                            </div>
                            <div class="col-md-2">
                                <span class="date-badge">08/08/2025</span>
                            </div>
                            <div class="col-md-2">
                                <span class="attendance-counter">9 / 15</span>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn btn-attendance present" onclick="toggleAttendance(this)">
                                    <i class="bi bi-check-circle"></i> Presente
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="student-row">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="student-name">BRENA SANTOS DA SILVA</div>
                                <div class="student-rgm">RGM: 46752240</div>
                            </div>
                            <div class="col-md-2">
                                <span class="date-badge">29/08/2025</span>
                            </div>
                            <div class="col-md-2">
                                <span class="attendance-counter">0 / 15</span>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn btn-attendance absent" onclick="toggleAttendance(this)">
                                    <i class="bi bi-x-circle"></i> Falta
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="student-row">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="student-name">BRUNO MEDEIROS UGULINO E ARAUJO</div>
                                <div class="student-rgm">RGM: 46031375</div>
                            </div>
                            <div class="col-md-2">
                                <span class="date-badge">13/08/2025</span>
                            </div>
                            <div class="col-md-2">
                                <span class="attendance-counter">3 / 15</span>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn btn-attendance present" onclick="toggleAttendance(this)">
                                    <i class="bi bi-check-circle"></i> Presente
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="student-row">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="student-name">CARLA MYLENA CALIXTO RODRIGUES</div>
                                <div class="student-rgm">RGM: 41887867</div>
                            </div>
                            <div class="col-md-2">
                                <span class="date-badge">03/07/2025</span>
                            </div>
                            <div class="col-md-2">
                                <span class="attendance-counter">0 / 15</span>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn btn-attendance absent" onclick="toggleAttendance(this)">
                                    <i class="bi bi-x-circle"></i> Falta
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="student-row">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="student-name">DAVI CLEISSANDRO BARBOSA CAVALCANTE</div>
                                <div class="student-rgm">RGM: 43363041</div>
                            </div>
                            <div class="col-md-2">
                                <span class="date-badge">15/07/2025</span>
                            </div>
                            <div class="col-md-2">
                                <span class="attendance-counter">6 / 15</span>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn btn-attendance present" onclick="toggleAttendance(this)">
                                    <i class="bi bi-check-circle"></i> Presente
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="student-row">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="student-name">DIEGO DANTAS CAVALCANTI</div>
                                <div class="student-rgm">RGM: 42215285</div>
                            </div>
                            <div class="col-md-2">
                                <span class="date-badge">04/08/2025</span>
                            </div>
                            <div class="col-md-2">
                                <span class="attendance-counter">0 / 15</span>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn btn-attendance" onclick="toggleAttendance(this)">
                                    <i class="bi bi-calendar-check"></i> Aula 1
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="student-row">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <div class="student-name">EMANUEL VITOR PEREIRA MARTINS</div>
                                <div class="student-rgm">RGM: 42859018</div>
                            </div>
                            <div class="col-md-2">
                                <span class="date-badge">08/08/2025</span>
                            </div>
                            <div class="col-md-2">
                                <span class="attendance-counter">6 / 15</span>
                            </div>
                            <div class="col-md-4 text-end">
                                <button class="btn btn-attendance absent" onclick="toggleAttendance(this)">
                                    <i class="bi bi-x-circle"></i> Falta
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <button class="btn btn-primary btn-lg me-3">
                        <i class="bi bi-save"></i> Salvar Presenças
                    </button>
                    <button class="btn btn-outline-secondary btn-lg">
                        <i class="bi bi-arrow-clockwise"></i> Atualizar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo BASE_URL; ?>/public/js/Presenca/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
