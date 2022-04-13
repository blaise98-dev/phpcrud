<?php 
include('config.php');
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$sql= "INSERT INTO `studentcrud` (`id`, `firstname`, `lastname`, `email`, `password`, `gender`) VALUES (null,'$firstname','$lastname','$email','$password','$gender');";
$result=$conn->query($sql);
if ($result) {
echo("New record inserted successfully");
        header('Location:view.php');
}
else{
    echo "Error".$sql."<br>".$conn->error;
}

}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student createpage</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Fill Student information</legend>
            Firstname:
           <input type="text" name="firstname" id="">
           <br>
           Lastname:
           <input type="text" name="lastname"><br>
           Email: <input type="email" name="email"><br>
           Password: <input type="password" name="password"><br>
           Gender: <input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female

<input type="submit" value="Save" name="submit"> 
       </fieldset>
    </form>
    
</body>
</html>
