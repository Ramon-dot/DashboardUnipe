<?php

class HomeController{
    public function index(){
        $title = "Página inicial";
        require __DIR__ . '/../views/Home/index.php';
    }
}