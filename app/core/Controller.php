<?php

class Controller
{
    protected function model($model)
    {
        $modelPath = '../app/models/' . $model . '.php';

        if (!file_exists($modelPath)) {
            http_response_code(500);
            echo 'Model not found: ' . htmlspecialchars($model);
            return null;
        }

        require_once $modelPath;

        return new $model;
    }

    protected function view($view, $data = [])
    {
        $viewPath = '../app/views/' . $view . '.php';

        if (!file_exists($viewPath)) {
            http_response_code(500);
            echo 'View not found: ' . htmlspecialchars($view);
            return;
        }

        extract($data);
        require_once $viewPath;
    }

    protected function redirect($path = '')
    {
        header('Location: ' . $this->url($path));
        exit;
    }

    protected function requireLogin()
    {
        if (empty($_SESSION['user'])) {
            $this->redirect('auth/login');
        }
    }

    protected function url($path = '')
    {
        $basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
        $path = ltrim($path, '/');

        return $basePath . ($path !== '' ? '/' . $path : '');
    }
}

?>
