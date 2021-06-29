<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "awt";

$mysql = new mysqli($servername, $username, $password, $dbname);
If(!$mysql) die(“error”);

    
    $query = "SELECT * FROM passport WHERE pno = '".$_POST["ppno"]."'";
    if($mysql->query($query)===TRUE)
    {
    $result = mysqli_query($mysql, $query);
    while($row = mysqli_fetch_array($result))
      {?>
      <body>
    <form action="ex.php" method="post" enctype="multipart/form-data">
    <label for="">Passport Number: </label>
    <input type="text" name="pno" value="<?php echo $row["pno"] ; ?>"> <br><br>
    <label for="">First Name: </label>
    <input type="text" name="fname" value="<?php echo $row["fname"] ; ?>"> <br><br>
    <label for="">Last Name: </label>
    <input type="text" name="lname" value="<?php echo $row["lname"] ; ?>"> <br><br>
    <label for="">Nation: </label>
    <input type="text" name="nation" value="<?php echo $row["nation"] ; ?>"> <br><br>
    <label for="">Date Of Birth: </label>
    <input type="date" name="dob" value="<?php echo $row["dob"] ; ?>"> <br><br>
    <label for="">Address: </label>
   <textarea name="address" id="" cols="30" rows="5" value="<?php echo $row["address"] ; ?>"></textarea> <br><br>
   <label for="">Gender: </label>
    
    <input type="text" name="gender" value="<?php echo $row["gender"] ; ?>"> <br><br>
    <label for="">Upload Photo: </label>
    <img src="data:image/jpeg;base64,'.base64_encode($row['photo'] ).'" height="200" width="150"  />
     <br><br>
    
   
    <button name="update">Update</button>
    </form>
    
</body><?php

      }}
      else{
        echo '<script> alert("error");</script>';
        header("Location:a54.php");
      }




?>