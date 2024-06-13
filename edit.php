<?php include 'header.php'; 

$id = $_GET['id'];

$conn = mysqli_connect("localhost","root","","php_crud") or die("Connection Failed");

$sql = "SELECT * FROM student 
JOIN studentclass ON student.class = studentclass.id
WHERE student.id = $id";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);

    $sid = $row['id'];
    $sname = $row['name'];
    $sclassid = $row['class'];
    $sclass = $row['cname'];
    $saddress = $row['address'];
    $sphone = $row['phone'];
}
?>

<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $sid ?>"/>
          <input type="text" name="sname" value="<?php echo $sname ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $saddress ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <select name="sclass">
              <option value="" selected disabled>Select Class</option>
              <option value="1">BCA</option>
              <option value="2">BSC</option>
              <option value="3">B.TECH</option>
          </select>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $sphone ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
</div>
</div>
</body>
</html>
