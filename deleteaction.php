<?php

include_once "./classes/Crud.php";
$crud = new Crud();

if (isset($_GET['id'])) {
    $id = $crud->conn->real_escape_string($_GET['id']);
    // var_dump($id);
    $result = $crud->deleteData($id, "student");
    if (!$result) {
        echo "no id to delete..";
    } else {
        echo "deleted successfully..";
    }
}
