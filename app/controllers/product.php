<?php

class product
{
    public function index()
    {
        echo "<h1>Product Page</h1>";
    }

    public function detail($id = '')
    {
        echo "<h1>Product Detail: $id</h1>";
    }
}

?>