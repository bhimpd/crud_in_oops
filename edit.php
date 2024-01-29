<?php

include_once "./classes/Crud.php";

include_once "./editaction.php";

$crud = new Crud();

$id = $crud->conn->real_escape_string($_GET['id']);

$sql = "SELECT * FROM student WHERE id='$id'";

$result = $crud->singleData($sql);

$name = $result['name'];
$email = $result['email'];
$address = $result['address'];
$age = $result['age'];


?>


<!DOCTYPE html>

<head>
    <title>Update student</title>
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>

    <div class="card">

        <div class="card-header">
            <h2><a href="index.php"><i class="fa-solid fa-list">View Lists</i></a></h2>
            <h2>Input User</h2>

        </div>
        <div class="card-body">
            <form method="POST" action="editaction.php">
            <input type="hidden" name="id" value="<?php echo $id?>">

                <label for="updated_name">Name:</label>
                <input type="text" id="updated_name" name="updated_name" value="<?php echo $name ?>"  required>

                <label for="updated_email">Email Address:</label>
                <input type="email" id="updated_email" name="updated_email" value="<?php echo $email ?>"  required>

                <label for="updated_address">Address:</label>
                <input type="address" id="updated_address" name="updated_address" value="<?php echo $address ?>" required>

                <label for="updated_age">Age:</label>
                <input type="number" id="updated_age" name="updated_age" value="<?php echo $age ?>"  required>

                <input type="submit" id="update" name="update" value="Update">
            </form>

        </div>

    </div>
</body>

</html>