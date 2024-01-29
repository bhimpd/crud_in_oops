<?php

include_once "./classes/Crud.php";
include_once "./addaction.php";

$crud = new Crud();

?>


<!DOCTYPE html>

<head>
    <title>Add student</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <div class="card">
        <div class="card-header">
            <h2><a href="index.php"><i class="fa-solid fa-list">View Lists</i></a></h2>
            <h2>Input User</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="addaction.php">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>

                <label for="address">Address:</label>
                <input type="address" id="address" name="address" required>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>

                <input type="submit" id="submit" name="submit">
            </form>
        </div>
    </div>
</body>

</html>