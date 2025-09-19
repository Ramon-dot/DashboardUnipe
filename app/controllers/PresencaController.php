<?php
class PresencaController {
    public function index() {
        $title = "Lista de Presença";
        require __DIR__ . '/../views/Presenca/index.php';
    }
}