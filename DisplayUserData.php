<?php
include('DatabaseOperator.php');
if (!empty($_GET['delid'])) {
    $id = $_GET['delid'];
    $DatabaseOperator = new DatabaseOperator();
    $DatabaseOperator->deletedata("employdetails", $id);
    header('location:DisplayUserData.php');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">
</head>

<body>


    <div class="container">
        <div class="text-center mb-4">
            <h3>Employee Information</h3>

        </div>
        <a href="index.php" class="btn btn-dark">Add New</a>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Sr.no</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Employ id</th>
                    <th scope="col">Mobile number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">DOJ</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $DatabaseOperator = new DatabaseOperator();
                $result = $DatabaseOperator->selectalldata("employdetails");
                while ($data = mysqli_fetch_array($result)) {
                ?>


                    <tr>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data['first_name'] ?> </td>
                        <td><?php echo $data['last_name'] ?></td>
                        <td><?php echo $data['emp_id'] ?></td>
                        <td><?php echo $data['mobile'] ?></td>
                        <td><?php echo $data['gender'] ?></td>
                        <td><?php echo $data['doj'] ?></td>
                        <td><?php echo $data['designation'] ?></td>
                        <td><?php echo $data['salary'] ?></td>

                        <td>
                            <a class="btn btn-primary" href="edit.php?id=<?php echo $data['id'] ?>" role="button">Edit</a>
                            <a class="btn btn-primary" href="DisplayUserData.php?delid=<?php echo $data['id'] ?>" role="button">Delete</a>

                        </td>
                    </tr>
                <?php } ?>

            </tbody>

        </table>
    </div>




</body>

</html>