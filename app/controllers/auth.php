<?php

require_once '../app/core/Controller.php';

class auth extends Controller
{
    public function index()
    {
        $this->login();
    }

    public function login()
    {
        $error = '';
        $username = '';

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');
            $password = trim($_POST['password'] ?? '');

            if ($username === '' || $password === '') {
                $error = 'Vui long nhap day du ten dang nhap va mat khau.';
            } elseif ($username === 'admin' && $password === '123456') {
                $_SESSION['user'] = $username;
                $this->redirect('home');
            } else {
                $error = 'Ten dang nhap hoac mat khau khong dung.';
            }
        }

        $this->view('auth/login', [
            'error' => $error,
            'username' => $username,
        ]);
    }

    public function logout()
    {
        unset($_SESSION['user']);
        $this->redirect('auth/login');
    }
}

?>
