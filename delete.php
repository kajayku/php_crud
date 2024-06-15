<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>

    <?php

    include 'config.php';

    if(isset($_POST['deletebtn'])){
       $sid = $_POST['sid'];
       $sql = "DELETE FROM student WHERE sid = '{$sid}'";
       if(mysqli_query($conn,$sql)){
        header("Location: index.php");
       }else{
        echo "Some things went wrong";
       }
    }
    ?>
</div>
</div>
</body>
</html>
