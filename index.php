<?php

include_once "./classes/Crud.php";

include_once "./deleteaction.php";

$crud = new Crud();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP: CRUD (Add, Edit, Delete, View) Application using OOP (Object Oriented Programming) and MYSQL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
    <div class="card text-center" style="padding:15px;">
        <h4>PHP: CRUD (Add, Edit, Delete, View) Application using OOP (Object Oriented Programming) and MYSQL</h4>
    </div><br><br>
    <div class="container">

        <h2>View Records
            <a href="add.php" class="btn btn-primary" style="float:right;">Add New Record</a>
        </h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $student =  $crud->displayData();

                foreach ($student as $stu) {
                ?>
                    <tr>
                        <td><?php echo $stu['id'] ?></td>
                        <td><?php echo $stu['name'] ?></td>
                        <td><?php echo $stu['email'] ?></td>
                        <td><?php echo $stu['address'] ?></td>
                        <td><?php echo $stu['age'] ?></td>
                        <td>
                            <a href="edit.php ?id=<?php echo $stu['id'] ?>" style="color:green">
                                <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
                            <a href="index.php?id=<?php echo $stu['id'] ?>" style="color:red">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>