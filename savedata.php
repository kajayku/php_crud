<?php

$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['class'];
$stu_phone = $_POST['sphone'];

include 'config.php';

$sql = "INSERT INTO student (sname,sclass,saddress,sphone) VALUES ('{$stu_name}','{$stu_class}','{$stu_address}','{$stu_phone}')";
// echo $sql;exit;
$result =  mysqli_query($conn,$sql);

if($result === true){
   header("location: index.php");
}else{
    echo "Some things oa wrong";
}

mysqli_close($conn);


?>