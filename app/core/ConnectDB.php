<?php

class ConnectDB
{
    protected $host = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $database = 'ql_sinhvien';
    protected $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect(
            $this->host,
            $this->username,
            $this->password,
            $this->database
        );

        if (!$this->connection) {
            die('Ket noi database that bai: ' . mysqli_connect_error());
        }

        mysqli_set_charset($this->connection, 'utf8');
    }
}

?>
