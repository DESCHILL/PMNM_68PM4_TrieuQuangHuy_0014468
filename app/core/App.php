<?php

class App
{
    protected $controller = 'auth';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->UrlProcess();

        // Controller
        if (isset($url[0])) {

            if (file_exists('../app/controllers/' . $url[0] . '.php')) {

                $this->controller = $url[0];

                unset($url[0]);
            }
        }

        // Require controller
        require_once '../app/controllers/' . $this->controller . '.php';

        // Create object
        $this->controller = new $this->controller;

        // Action
        if (isset($url[1])) {

            if (method_exists($this->controller, $url[1])) {

                $this->action = $url[1];

                unset($url[1]);
            }
        }

        // Params
        $this->params = $url ? array_values($url) : [];

        // Call controller + action + params
        call_user_func_array(
            [$this->controller, $this->action],
            $this->params
        );
    }

    public function UrlProcess()
    {
        if (isset($_GET['url'])) {

            return explode(
                '/',
                filter_var(trim($_GET['url'], '/'))
            );
        }

        return [];
    }
}

?>
