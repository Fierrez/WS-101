<?php
    include "dbase_connect.php" ;
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP CRUD App</title>
        <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">
    </head>

    <body>
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#4682b4; color: white;">
            PHP CRUD App</nav>

        <div class="container">
            <div class="container">
                <a href="add.php" class="btn btn-dark">Add New</a>
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <table class="table table-hover text-center">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "Enter SQL code to select all records from table";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row["id"] ?></td>
                                    <td><?php echo $row["first_name"] ?></td>
                                    <td><?php echo $row["last_name"] ?></td>
                                    <td><?php echo $row["email"] ?></td>
                                    <td><?php echo $row["gender"] ?></td>
                                    <td></td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </tbody>
                </table>
            </div>
        </div>


        <script src="/Bootstrap/js/bootstrap.bundle.min.js"></script>
    
    
    </body>

</html>