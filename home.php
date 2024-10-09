<?php
    include "dbase_connect.php" ;

    if (isset($_POST["submit"])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $sql = "INSERT ______ `NameOfTable`(`id`, `first_name`, `last_name`, `email`, `_______`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            header("Location: index.php?msg=New record created successfully");
        } else {
            echo "Failed: " . mysqli_error($conn);
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP and MySQL App</title>

        <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:#4682b4; color: white;">PHP and MySQL App</nav>

        <div class="container">
            <div class="text-center mb-4">
                <h3>Add Employee</h3>
                <p class="text-muted">Accomplish the form below</p>
            </div>
            <div clas="container d-flex justify-content-center">
                <form action="add.php" method="post" style="width: 50vw; min-width: 300px;">
                    
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">First Name:</label>
                            <input type="text" class="form-control" name="first_name" placeholder="YourFirstName">
                        </div>
                        <div class="col">
                            <label class="form-label">Last Name:</label>
                            <input type="text" class="form-control" name="last_name" placeholder="YourLastName">
                        </div>      
                        <div class="mb-3">
                            <label class="form-label">Email:</label>
                            <input type="text" class="form-control" name="email" placeholder="YourEmail">
                        </div>
                    </div>

                    <div class="form-group mb-3" style="display: flex; justify-content: center;">
                        <label>Gender:</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="male" value="male">&nbsp;
                        <label for="male" class="form-input-label">Male</label>&nbsp;
                        <input type="radio" class="form-check-input" name="gender" id="female" value="female">&nbsp;
                        <label for="female" class="form-input-label">Female</label>
                    </div>
                    
                    <div style="display: flex; justify-content: center;">
                        <button type="submit" class="btn btn-primary" name="submit">Save</button>&nbsp;
                        <a href="index.php" class="btn btn-warning">Cancel</a>
                    </div>

                </form>

            </div>
        </div>



        <script src="/Bootstrap/js/bootstrap.bundle.min.js"></script>
    </body>
</html>