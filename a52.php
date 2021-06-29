<!DOCTYPE html>
<?php
$a=$_POST['name'];
$b=$_POST['price'];
$cookie_name = "user";
$cookie_value = "AWT Gone!!";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day



date_default_timezone_set('Asia/Calcutta');
$inTwoMonths = 60 * 60 * 24 * 60 + time(); //2 month
setcookie('lastVisit', date("G:i - d/m/y"), $inTwoMonths); 
if(isset($_COOKIE['lastVisit']))
{
$visit = $_COOKIE['lastVisit'];
echo "Last Visited on : ".$visit;
}
echo '<br>';
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    
    echo "User Name is " .$a;
    echo '<br>';
    echo "Ticket Price is " .$b;
}
?>

