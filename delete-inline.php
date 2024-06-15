<?php 

include 'config.php';

$sid = $_GET['id'];

$sql = "DELETE FROM student WHERE sid = '{$sid}'";

if(mysqli_query($conn,$sql)){

    header("Location: index.php");
}else{
    echo "Some things went wrong";
}


?>