<?php

class DisciplinasController{
    public function index(){
        $title = "Minhas Disciplinas";
        require __DIR__ . '/../views/Disciplinas/index.php';
    }
}