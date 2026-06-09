<?php

require_once '../app/core/Controller.php';

class sinhvien extends Controller
{
    public function index()
    {
        $model = $this->model('SinhvienModel');
        $students = $model ? $model->getAll() : [];

        $this->view('sinhvien/index', [
            'title' => 'Danh sach sinh vien',
            'students' => $students,
        ]);
    }
}

?>
