<?php

require_once '../app/core/ConnectDB.php';

class SinhvienModel extends ConnectDB
{
    public function getAll($limit = null, $offset = 0)
    {
        $sql = 'SELECT * FROM sinhvien';

        if ($limit !== null) {
            $limit = (int) $limit;
            $offset = (int) $offset;
            $sql .= ' LIMIT ' . $limit . ' OFFSET ' . $offset;
        }

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

    public function countAll()
    {
        $sql = 'SELECT COUNT(*) AS total FROM sinhvien';
        $result = mysqli_query($this->connection, $sql);

        if (!$result) {
            return 0;
        }

        $row = mysqli_fetch_assoc($result);

        return (int) ($row['total'] ?? 0);
    }
}

?>
