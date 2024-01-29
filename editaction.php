<?php

include_once "./classes/Crud.php";

$crud = new Crud();

if (isset($_POST['update'])) {

    $id = $crud->conn->real_escape_string($_POST['id']);
    $updated_name = $crud->conn->real_escape_string($_POST['updated_name']);
    $updated_address = $crud->conn->real_escape_string($_POST['updated_address']);
    $updated_email = $crud->conn->real_escape_string($_POST['updated_email']);
    $updated_age = $crud->conn->real_escape_string($_POST['updated_age']);

    $updated_data = [
        "name" => $updated_name,
        "email" => $updated_email,
        "address" => $updated_address,
        "age" => $updated_age
    ];

    $result = $crud->updateData($id,"student",$updated_data);

    if (!$result) {
        echo "Error updating record: " . $crud->conn->error;
    } else {
        header("Location: index.php");
        exit();
    }
}
