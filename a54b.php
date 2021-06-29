<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "awt";

$mysql = new mysqli($servername, $username, $password, $dbname);
If(!$mysql) die(“error”);
if(isset($_POST['submit'])){

$photo1 = $_FILES['photoupload']['tmp_name'];
$photoupload = addslashes(file_get_contents($photo1));
$pno=$_POST['pno'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$gender=$_POST['gender'];

$dob=$_POST['dob'];
$nation=$_POST['nation'];

$sql="insert into passport (pno,fname,lname,dob,nation,address,gender,photo) values ('$pno','$fname','$lname','$dob','$nation','$address','$gender','$photoupload')";
if($mysql->query($sql)===TRUE)
    {
        header("Location:a54.php");
    
    }
    else
    {

    echo "User Already Exists";
    }}

    if(isset($_POST['delete'])){
    ?>
       
        <body>
        <form action="ex.php" method="post" enctype="multipart/form-data">
            <label for="">Enter Passport Number: </label>
            <input type="text" name="ppno">
            <button name="del">Delete</button>
            </form>
        </body>
       
        <?php 
        }
        ?>
<?php 
if(isset($_POST['update'])){
    ?>
       
        <body>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <label for="">Enter Passport Number to Update: </label>
            <input type="text" name="ppno">
            <button name="update">Update</button>
            </form>
        </body>
       
        <?php 
        }
        ?>
        