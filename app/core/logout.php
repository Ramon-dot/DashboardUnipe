<?php

class Logout {
    public function index() {
        // session_start(); // <-- REMOVIDO: Desnecessário

        // Limpa todas as variáveis da sessão
        $_SESSION = [];

        // Destrói a sessão
        session_destroy();

        // Redireciona para a página de login usando a URL base
        header("Location: " . BASE_URL . "/login");
        exit();
    }
}