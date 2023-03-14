<?php

include_once("DatabaseOperator.php");

$DatabaseOperator = new DatabaseOperator();

if (isset($_POST['submit'])) {
    $data = $_POST;

    $DatabaseOperator->insert($data, 'employdetails');


    if ($data) {
        //echo 'insert successfully';
        header('location:DisplayUserData.php');
    } else {
        //echo 'try again';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
    <title>Employee Details</title>
</head>

<body>

    <body>
        <div class="container">
            <div class="text-center mb-4">
                <h3>Add New Employ</h3>

            </div>
            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row">
                        <div class="col">
                            <label class="form-label">First Name:</label>
                            <input type="text" class="form-control" name="first_name">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Last Name:</label>
                            <input type="text" class="form-control" name="last_name">

                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="form-label">Employ ID:</label>
                            <input type="text" class="form-control" name="emp_id">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="form-label">Mobile:</label>
                            <input type="text" class="form-control" name="mobile">

                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label>Gender:</label>
                        <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                        <label for="male" class="form-input-label">Male</label>

                        <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                        <label for="female" class="form-input-label">Female</label>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="form-label">DOJ:</label>
                            <input type="date" class="form-control" name="doj">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="form-label">Designation:</label>
                            <input type="text" class="form-control" name="designation">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="form-label">Salary:</label>
                            <input type="text" class="form-control" name="salary">
                        </div>
                    </div>






                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>

                    </div>

    </body>

</html>