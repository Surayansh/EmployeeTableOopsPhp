<?php

include_once("DatabaseOperator.php");

$id = $_GET['id'];
$DatabaseOperator = new DatabaseOperator();
$editdata = $DatabaseOperator->selectbyid('employdetails', $id);

if (isset($_POST['submit'])) {
    $data = array(

        "id" => $id,
        "first_name" => $_POST['first_name'],
        "last_name" => $_POST['last_name'],
        "emp_id" => $_POST['emp_id'],
        "gender" => $_POST['gender'],
        "doj" => $_POST['doj'],
        "designation" => $_POST['designation'],
        "salary" => $_POST['salary']

    );

    $DatabaseOperator->update($data, 'employdetails', $id);


    if ($data) {
        echo 'insert successfully';
        header('location:DisplayUserData.php');
    } else {
        echo 'try again';
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
    <title>edit</title>
</head>

<body>

    <body>
        <div class="container">
            <div class="text-center mb-4">
                <h3>Edit Details</h3>

            </div>
            <div class="container d-flex justify-content-center">
                <form action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="row">
                        <div class="col">
                            <label class="form-label">First Name:</label>
                            <input type="text" class="form-control" name="first_name" value="<?php echo $editdata['first_name']; ?>">

                        </div>
                    </div>
                    <div class=" row">
                        <div class="col">
                            <label class="form-label">Last Name:</label>
                            <input type="text" class="form-control" name="last_name" value="<?php echo $editdata['last_name']; ?>">

                        </div>
                    </div>

                    <div class=" row">
                        <div class="col">
                            <label class="form-label">Employ ID:</label>
                            <input type="text" class="form-control" name="emp_id" value="<?php echo $editdata['emp_id']; ?>">
                        </div>
                    </div>

                    <div class=" row">
                        <div class="col">
                            <label class="form-label">Mobile:</label>
                            <input type="text" class="form-control" name="mobile" value="<?php echo $editdata['mobile']; ?>">

                        </div>
                    </div>

                    <?php
                    $male = "";
                    $female = "";
                    if ($editdata["gender"] == "male") $male = "checked";
                    if ($editdata["gender"] == "female") $female = "checked";
                    ?>
                    <div class=" form-group mb-3">
                        <label>Gender:</label>
                        <input type="radio" class="form-check-input" name="gender" id="gender" <?php echo $male; ?> value="male">
                        <label for="male" class="form-input-label">Male</label>

                        <input type="radio" class="form-check-input" name="gender" id="gender" <?php echo $female; ?> value="female">
                        <label for="female" class="form-input-label">Female</label>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="form-label">DOJ:</label>
                            <input type="date" class="form-control" name="doj" value="<?php echo $editdata['doj']; ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="form-label">Designation:</label>
                            <input type="text" class="form-control" name="designation" value="<?php echo $editdata['designation']; ?>">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label class="form-label">Salary:</label>
                            <input type="text" class="form-control" name="salary" value="<?php echo $editdata['salary']; ?>">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>

                    </div>

    </body>

</html>