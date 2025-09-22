<?php

include_once(__DIR__ . "/../../../config/config.php");

//Conecta ao banco de dados
$pdo = dbConnect();

//Verifica se o formulário foi enviado
if (isset($_POST['email']) && isset($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Verifica se o e-mail existe no banco de dados
    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->execute();

    $user = $stmt->fetch();

    if ($user) {
        //Verifica se o usuário está bloqueado
        if ($user['lockout_time'] && strtotime($user['lockout_time']) > time()) {
            $remaining_time = strtotime($user['lockout_time']) - time();
            echo "<script>alert('Sua conta está bloqueada. Tente novamente em " . ceil($remaining_time / 60) . " minutos.');</script>";
        } else {
            //Verifica se a senha está correta
            if (password_verify($password, $user['password'])){
                $sql = "UPDATE usuarios SET failed_login_attempts = 0, lockout_time = NULL WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(':id', $user['id']);
                $stmt->execute();

                //Define a sessão do usuário e redireciona para a página inicial
                $_SESSION['id'] = $user['id'];
                header("Location: " . BASE_URL);
                exit;
            }else{
                //Senha incorreta: Incremeta as tentativas de falha
                $attempts = $user['failed_login_attempts'] + 1;
                $lockout_time = NULL;

                //Define quantidades de tentativas e bloquear por 15 minutos
                if ($attempts >= 3){
                    $lockout_time = date('Y-m-d H:i:s', time() + 900);
                    echo "<script>alert('Usuário e/ou senha incorretos. Sua conta foi bloqueada por 15 minutos.');</script>";
                }else{
                    echo "<script>alert('Usuário e/ou senha incorretos!');</script>";
                }

                //Atualiza o usuário no banco de dados com a nova contagem de tentativas e o tempo de bloqueio
                $sql = "UPDATE usuarios SET failed_login_attempts = :attempts, lockout_time = :lockout_time WHERE id = :id";
                $stmt = $pdo->prepare($sql);
                $stmt->bindValue(':attempts', $attempts);
                $stmt->bindValue(':lockout_time', $lockout_time);
                $stmt->bindValue(':id', $user['id']);
                $stmt->execute();
            }
        }
    }else{
        //Se o usuário não existir, exibe uma mensagem de erro
        echo "<script>alert('Usuário e/ou senha incorretos!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="/DashboardUnipe/public/css/TelaLogin/style.css" rel="stylesheet">
</head>

<body>
    <div class="login-container">
        <div class="bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
            <div class="shape shape-5"></div>
            <div class="shape shape-6"></div>
        </div>

        <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
            <div class="login-card">
                <div class="row g-0 h-100">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center illustration-side">
                        <div class="text-center position-relative">
                            <div class="illustration-container">
                                <div class="main-shape">
                                    <div class="camera-icon">
                                        <i class="fas fa-camera"></i>
                                    </div>
                                </div>
                                <div class="floating-elements">
                                    <div class="star star-1">✦</div>
                                    <div class="star star-2">✨</div>
                                    <div class="star star-3">⭐</div>
                                    <div class="star star-4">✦</div>
                                    <div class="cloud">☁️</div>
                                    <div class="dots dots-1">⋯</div>
                                    <div class="dots dots-2">⋮</div>
                                    <div class="geometric geo-1"></div>
                                    <div class="geometric geo-2"></div>
                                    <div class="wave-line"></div>
                                </div>
                            </div>
                            <div class="illustration-text mt-4">
                                <h3 class="text-white mb-3">You Are Few Minutes Way To Boost</h3>
                                <h3 class="text-white">Your Skills With <span class="text-warning">Ludiflex</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="login-form-container w-100 p-5">
                            <div class="toggle-buttons mb-4">
                                <button class="btn toggle-btn active" id="signInBtn">Login</button>
                                <button class="btn toggle-btn" id="signUpBtn">Cadastrar</button>
                            </div>

                            <div class="form-section" id="signInForm">
                                <h2 class="text-white mb-4">Sign In</h2>

                                <form method="post" action="">
                                    <div class="mb-3">
                                        <input type="text" name="email" class="form-control" placeholder="Informe o e-mail" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Digite a senha" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Entrar</button>
                                </form>

                                <div class="social-login">
                                    <div class="d-flex justify-content-center gap-3">
                                        <button class="btn social-btn">
                                            <i class="fab fa-google"></i>
                                        </button>
                                        <button class="btn social-btn">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>
                                        <button class="btn social-btn">
                                            <i class="fab fa-twitter"></i>
                                        </button>
                                        <button class="btn social-btn">
                                            <i class="fab fa-github"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-section d-none" id="signUpForm">
                                <h2 class="text-white mb-4">Sign Up</h2>

                                <form method="post" action="/DashboardUnipe/public/index.php?url=login/auth">
                                    <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?? ''; ?>">
                                    <div class="mb-3">
                                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Entrar</button>
                                </form>

                                <div class="social-login">
                                    <div class="d-flex justify-content-center gap-3">
                                        <button class="btn social-btn">
                                            <i class="fab fa-google"></i>
                                        </button>
                                        <button class="btn social-btn">
                                            <i class="fab fa-facebook-f"></i>
                                        </button>
                                        <button class="btn social-btn">
                                            <i class="fab fa-twitter"></i>
                                        </button>
                                        <button class="btn social-btn">
                                            <i class="fab fa-github"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/DashboardUnipe/public/js/TelaLogin/script.js"></script>
</body>

</html>