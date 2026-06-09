<?php

require_once '../app/core/ConnectDB.php';

class SinhvienModel extends ConnectDB
{
    public function getAll()
    {
        $sql = 'SELECT * FROM sinhvien';
        $result = mysqli_query($this->connection, $sql);

        if (!$result) {
            return [];
        }

        $students = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $students[] = $row;
        }

        return $students;
    }
}

?>
