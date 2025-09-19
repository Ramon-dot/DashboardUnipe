<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Presença</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .attendance-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }
        
        .header-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        
        .student-row {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            margin-bottom: 10px;
            padding: 15px;
            transition: all 0.3s ease;
            border-left: 4px solid #3498db;
        }
        
        .student-row:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .student-name {
            font-weight: 600;
            color: #2c3e50;
            font-size: 0.95rem;
        }
        
        .student-rgm {
            color: #7f8c8d;
            font-size: 0.85rem;
        }
        
        .attendance-info {
            font-size: 0.9rem;
            color: #34495e;
        }
        
        .btn-attendance {
            background: linear-gradient(45deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 20px;
            color: white;
            font-size: 0.8rem;
            padding: 8px 16px;
            transition: all 0.3s ease;
        }
        
        .btn-attendance:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        
        .btn-attendance.present {
            background: linear-gradient(45deg, #56ab2f 0%, #a8e6cf 100%);
        }
        
        .btn-attendance.absent {
            background: linear-gradient(45deg, #ff416c 0%, #ff4b2b 100%);
        }
        
        .date-badge {
            background: linear-gradient(45deg, #ffecd2 0%, #fcb69f 100%);
            color: #8b4513;
            border-radius: 15px;
            padding: 5px 12px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .attendance-counter {
            background: linear-gradient(45deg, #a8edea 0%, #fed6e3 100%);
            color: #2c3e50;
            border-radius: 15px;
            padding: 5px 12px;
            font-weight: 600;
            font-size: 0.85rem;
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <div class="attendance-container p-4">
            <div class="header-number text-center">
                4243841
            </div>
            
            <div class="row">
                <div class="col-12">
                    <!-- Student 1 -->
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
                    
                    <!-- Student 2 -->
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
                    
                    <!-- Student 3 -->
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
                    
                    <!-- Student 4 -->
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
                    
                    <!-- Student 5 -->
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
                    
                    <!-- Student 6 -->
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
                    
                    <!-- Student 7 -->
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
                    
                    <!-- Student 8 -->
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
                    
                    <!-- Student 9 -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleAttendance(button) {
            const icon = button.querySelector('i');
            
            if (button.classList.contains('present')) {
                // Change to absent
                button.classList.remove('present');
                button.classList.add('absent');
                button.innerHTML = '<i class="bi bi-x-circle"></i> Falta';
            } else if (button.classList.contains('absent')) {
                // Change to neutral
                button.classList.remove('absent');
                button.innerHTML = '<i class="bi bi-calendar-check"></i> Aula 1';
            } else {
                // Change to present
                button.classList.add('present');
                button.innerHTML = '<i class="bi bi-check-circle"></i> Presente';
            }
            
            // Add visual feedback
            button.style.transform = 'scale(0.95)';
            setTimeout(() => {
                button.style.transform = 'scale(1)';
            }, 150);
        }
        
        // Add some interactive feedback
        document.querySelectorAll('.student-row').forEach(row => {
            row.addEventListener('mouseenter', function() {
                this.style.borderLeftColor = '#e74c3c';
            });
            
            row.addEventListener('mouseleave', function() {
                this.style.borderLeftColor = '#3498db';
            });
        });
    </script>
</body>
</html>
