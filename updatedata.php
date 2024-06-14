<?php 

include 'config.php';

$stu_id = $_POST['sid'];
$stu_name = $_POST['sname'];
$stu_address = $_POST['saddress'];
$stu_class = $_POST['sclass'];
$stu_phone = $_POST['sphone'];

 $sql = "UPDATE student SET sname = '{$stu_name}', sclass ='{$stu_class}', saddress = '{$stu_address}', sphone = '{$stu_phone}' WHERE sid = {$stu_id}";
$result =  mysqli_query($conn,$sql);

if($result === true){
   header("location: index.php");
}else{
    echo "Some things oa wrong";
}

mysqli_close($conn);

?>