<?php
include('config.php');
$sql = "select * from studentcrud";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of student's data</title>
</head>

<body>
    <div class="container">
        <h2>Student's list</h2>
        <table class="table">
            <thead>
                <th>#</th>
                <th>Firstname</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td> <?php echo $row['gender']; ?></td>
                            <td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a> &nbsp;
                             <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                        </tr>
                <?php  }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>