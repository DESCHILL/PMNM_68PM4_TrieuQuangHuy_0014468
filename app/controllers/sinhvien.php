<?php

require_once '../app/core/Controller.php';

class sinhvien extends Controller
{
    public function index()
    {
        $model = $this->model('SinhvienModel');
        $perPage = 9;
        $currentPage = max(1, (int) ($_GET['page'] ?? 1));
        $totalStudents = $model ? $model->countAll() : 0;
        $totalPages = max(1, (int) ceil($totalStudents / $perPage));

        if ($currentPage > $totalPages) {
            $currentPage = $totalPages;
        }

        $offset = ($currentPage - 1) * $perPage;
        $students = $model ? $model->getAll($perPage, $offset) : [];

        $this->view('sinhvien/index', [
            'title' => 'Danh sach sinh vien',
            'students' => $students,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'totalStudents' => $totalStudents,
        ]);
    }
}

?>
