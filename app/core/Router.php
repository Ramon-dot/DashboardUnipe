<?php
class Router {
    public function run() {
        // Pega o parâmetro 'url' do .htaccess
        $url = $_GET['url'] ?? 'home';
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        
        $urlParts = explode('?', $url);
        $page = $urlParts[0];

        switch ($page) {
            case 'home':
                require_once __DIR__ . '/../../app/controllers/HomeController.php';
                $controller = new HomeController();
                $controller->index();
                break;
                
            case 'login':
                require_once __DIR__ . '/../../app/controllers/LoginController.php';
                $controller = new LoginController();
                $controller->index();
                break;

            case 'login/auth':
                require_once __DIR__ . '/../../app/controllers/LoginController.php';
                $controller = new LoginController();
                $controller->auth();
                break;

            case 'logout':
                require_once __DIR__ . '/logout.php';
                $controller = new Logout();
                $controller->index();
                break;

            case 'disciplinas':
                require_once __DIR__ . '/../../app/controllers/DisciplinasController.php';
                $controller = new DisciplinasController();
                $controller->index();
                break;
            
            case 'presenca':
                require_once __DIR__ . '/../../app/controllers/PresencaController.php';
                $controller = new PresencaController();
                $controller->index();
                break;

            case 'cadastro':
                require_once __DIR__ . '/../../app/controllers/CadastroController.php';
                $controller = new CadastroController();
                $controller->index();
                break;

            default:
                http_response_code(404);
                echo "Página não encontrada.";
                break;
        }
    }
}