<?php

require_once '../app/core/Controller.php';

class product extends Controller
{
    public function index()
    {
        $this->view('product/index', ['title' => 'San pham']);
    }

    public function detail($id = '')
    {
        $this->view('product/detail', [
            'id' => $id,
            'title' => 'Chi tiet san pham',
        ]);
    }
}

?>
