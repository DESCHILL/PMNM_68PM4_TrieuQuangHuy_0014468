<?php

$sessionPath = realpath('../app/storage/sessions');

if ($sessionPath !== false) {
    session_save_path($sessionPath);
}

session_start();

require_once '../app/core/App.php';

new App();

?>
