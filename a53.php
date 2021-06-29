<?php 
  
session_start();

if(isset($_POST["login"]))
{
if(($_SESSION["username"]==$_POST['username']) &&
($_SESSION["password"]==$_POST['password']) && isset($_SESSION['views']))
{ 
$_SESSION['views'] = $_SESSION['views']+1;
echo"welcome back " .$_SESSION["username"];
echo '<br>'; }
else {
$_SESSION['views']=0;
$_SESSION["username"]=$_POST['username'];
$_SESSION["password"]=$_POST['password'];


echo"<br>This is your first visit " .$_SESSION["username"];
echo '<br>';
}
echo"you visited ".$_SESSION['views'] ." times"; }


if(isset($_POST['logout'])){
    SESSION_unset();
    echo"Logged Out ";
    echo $_SESSION["username"]=$_POST['username']; }

   
/*if(isset($_SESSION['views']))
   $_SESSION['views'] = $_SESSION['views']+1;
else
    $_SESSION['views']=0;*/
      

  
?>