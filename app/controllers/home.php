<?php

require_once '../app/core/Controller.php';

class home extends Controller
{
    public function index()
    {
        $this->requireLogin();
        $this->view('home/index', ['title' => 'Trang chu']);
    }

    public function about()
    {
        $this->view('home/about', ['title' => 'Gioi thieu']);
    }
}

?>
