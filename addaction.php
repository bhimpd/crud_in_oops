<?php
include_once "./classes/Crud.php";

$crud = new Crud();


if (isset($_POST['submit'])) {

    $name = $crud->conn->real_escape_string($_POST['name']);
    $email = $crud->conn->real_escape_string($_POST['email']);
    $address = $crud->conn->real_escape_string($_POST['address']);
    $age = $crud->conn->real_escape_string($_POST['age']);

    $data = [
        "name" => $name,
        "email" => $email,
        "address" => $address,
        "age" => $age
    ];

    $result = $crud->insertData("student", $data);

    if ($result) {
        echo "data inserted";
        header('location:index.php');
    } else {
        echo "data not inserted...";
    }
}
