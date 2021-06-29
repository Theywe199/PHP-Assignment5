<?php        
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "awt";

$mysql = new mysqli($servername, $username, $password, $dbname);
If(!$mysql) die(“error”);
        if(isset($_POST['del'])){
        $pno=$_POST['ppno'];
        $sql1="DELETE FROM passport WHERE pno='$pno'";
        if($mysql->query($sql1)===TRUE)
    {
        header("Location:a54.php");
    
    }
    else
    
    {

    echo "User Already Exists";
    }


    }

    if(isset($_POST['update'])){
        $pno=$_POST['pno'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $address=$_POST['address'];
        $gender=$_POST['gender'];
        
        $dob=$_POST['dob'];
        $nation=$_POST['nation'];
        $sql1="UPDATE passport set fname='$fname',lname='$lname',address='$address',gender='$gender',dob='$dob',nation='$nation' where pno='$pno'";
        if($mysql->query($sql1)===TRUE)
    {
        header("Location:a54.php");
    
    }
    else
    
    {

    echo "User Already Exists";
    }


    }
?>