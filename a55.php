<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="">User Name:</label>
    <input type="text" name="name">
    <label for="">Password: </label>
    <input type="text" name="password">
    <button name="button">Login</button>
    </form>
</body>
</html>
<?php

$servername = "localhost";
$username = "root";
$passwor = "";
$dbname = "awt";

$mysql = new mysqli($servername, $username, $passwor, $dbname);
If(!$mysql) die(“error”);
if(isset($_POST['button'])){
    $name=$_POST['name'];
    $passwordd=$_POST['password'];
    $query = "SELECT * FROM loginn WHERE passwordd = '".$_POST["password"]."'";
   
    $result = mysqli_query($mysql, $query);
    
  if($row = mysqli_fetch_array($result))
      {
       
        
          if ($row["passwordd"]===$passwordd){            
            header("Location:a55a.php");
          }
          else{
            $query = "INSERT into(uname,passwordd) loginn values('$name','$passwordd')";
        
            if($mysql->query($query)===TRUE)
        {
            header("Location:a55a.php");
        
        }
        
    
          }
         
      }
     

      
   
    
}

?>