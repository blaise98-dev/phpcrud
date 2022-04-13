<?php
$conn=new mysqli("localhost","root","","internsantech");
if(!$conn){
    echo("Failed to connect to database".$conn->connect_error());
}
?>