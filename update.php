<?php
include('config.php');
if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    $sql = "SELECT * FROM `studentcrud` WHERE `id`='$user_id'; ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
            $id = $row['id'];
        }
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>

            <h2> Student Update Form</h2>
            <form action="" method="POST">
                <fieldset>
                    <legend>Update Your information</legend>
                    Firstname: <input type="text" name="firstname" value="<?php echo $firstname; ?>"><br>
                    Lastname: <input type="text" name="lastname" value="<?php echo $lastname; ?>"><br>
                    Email: <input type="email" name="email" value="<?php echo $email; ?>"><br>
                    Password: <input type="password" name="password" value="<?php echo $password; ?>"><br>
                    Gender: <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') {
                                                                                echo "checked";
                                                                            } ?>>Male
                    <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') {
                                                                            echo "checked";
                                                                        } ?>>Female <br>
                    <input type="submit" value="Update" name="update">

                </fieldset>
            </form>
        </body>

        </html>
<?php
    } else {
        // <!-- redirect user if id not valid -->
        header('Location:view.php');
    }

    if (isset($_POST['update'])) {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        $sql = " UPDATE `studentcrud` SET `firstname` = '$firstname', `lastname`= '$lastname',`email`= '$email',`password`= '$password',`gender`= '$gender' WHERE `id`= '$user_id'; ";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            // echo ("Student data updated successfully!!");
            header('Location:view.php');
        } else {
            echo ("Error" . $sql . "<br>" . $conn->error);
        }
    }
}
?>