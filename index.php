<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php
     $conn = mysqli_connect("localhost","root","","php_crud") or die("Connection failed");
     $sql = "SELECT * FROM student JOIN studentclass WHERE student.class = studentclass.id";
     $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
    
     if(mysqli_num_rows($result)>0){
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Class</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while($row = mysqli_fetch_array($result)){
            //     echo "<pre>";
            // print_r($row);exit;

            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['cname'] ?></td>
                <td><?php echo $row['address'] ?></td>
                <td><?php echo $row['phone'] ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id'] ?>'>Edit</a>
                    <a href='delete-inline.php'>Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php }else{
        echo "<h2> No Record found </h2>";
    } 
    mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>
