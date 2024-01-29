<?php
include_once "./classes/Database.php";

class Crud extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    //to display the data in index.php file
    public function displayData()
    {
        $sql = "SELECT * FROM student";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $data = [];
            while ($rows = $result->fetch_assoc()) {
                $data[] = $rows;
            }
            return $data;
        } else {
            echo "No Data found...";
        }
    }

    public function insertData($table, $data)
    {
        $columns = '';
        $values = '';
        foreach ($data as $key => $value) {
            $columns .= "$key, ";
            $values .= "'" . $this->conn->real_escape_string($value) . "', ";
        }
        $columns = rtrim($columns, ', ');
        $values = rtrim($values, ', ');

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        $result = $this->conn->query($sql);
        if ($result) {
            return true;
        }
    }

    public function deleteData($id, $table)
    {
        $sql = "DELETE from $table WHERE id='$id'";

        $result = $this->conn->query($sql);
        if ($result)
            return true;
    }

    public function singleData($sql)
    {
        $result = $this->conn->query($sql);
        if ($result) {
            if ($result->num_rows > 0) {
                $rows = $result->fetch_assoc();
                return $rows;
            } else {
                echo "NO records found...";
            }
        } else {
            echo "Error: " . $this->conn->error;
        }
    }

    public function updateData($id, $table, $updated_data)
    {
        $setValues = '';
        foreach ($updated_data as $key => $value) {
            $setValues .= "$key = '" . $this->conn->real_escape_string($value) . "', ";
        }
        $setValues = rtrim($setValues, ', ');

        $sql = "UPDATE $table SET $setValues WHERE id = $id";

        $result = $this->conn->query($sql);

        if ($result) {
            echo "Data updated..";
            return true;
        } 
    }
}
