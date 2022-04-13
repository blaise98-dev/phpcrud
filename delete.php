<?php 
include "config.php";
if (isset($_GET['id'])) {
$user_id=$_GET['id'];
$sql= "DELETE FROM studentcrud WHERE `studentcrud`.`id` = '$user_id'";
$result=$conn->query($sql);
if ($result==TRUE) {
    echo ("student deleted successfully");
        header('Location:view.php');

}
else{
    echo "Error:".$sql."<br>".$conn->error;
}
}
?>