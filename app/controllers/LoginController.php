<?php
require_once __DIR__ . '/../../config/config.php';

class LoginController {
 
    //Exibe a página de login e gera o token CSRF.
    public function index() {
        // Gera um token CSRF se não existir na sessão
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }

        $title = "Login";
        require __DIR__ . '/../views/Login/index.php';
    }
    //Processa a tentativa de autenticação.
    public function auth() {

        if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !hash_equals($_SESSION['csrf_token'] ?? '', $_POST['csrf_token'] ?? '')) {
            http_response_code(400);
            echo "Requisição inválida ou token CSRF incorreto.";
            exit;
        }

        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        if (!$username || !$password) {
            $_SESSION['error'] = "Usuário e senha são obrigatórios.";
            header("Location: " . BASE_URL . "/login");
            exit;
        }

        $pdo = dbConnect();
        $stmt = $pdo->prepare("SELECT id, username, password_hash FROM users WHERE username = :u LIMIT 1");
        $stmt->execute([':u' => $username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password_hash'])) {
            // Regenera o ID da sessão para prevenir session fixation
            session_regenerate_id(true);
            
            $_SESSION['user_id'] = $user['id'];
            unset($_SESSION['error']); // Limpa erros antigos
            header("Location: " . BASE_URL . "/home");
            exit;
        } else {
            $_SESSION['error'] = "Credenciais inválidas.";
            header("Location: " . BASE_URL . "/login");
            exit;
        }
    }
}