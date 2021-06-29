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
    <label for="">User Name: </label>
    <input type="text" name="name"><br>
    <label for="">Account Number: </label>
    <input type="text" name="accno"><br>
    <label for="">Amount: </label>
    <input type="text" name="amount"><br>
    <button name="create">Create</button>
    <button name="withdraw">Withdraw</button>
    <button name="deposit">Deposit</button>
    <button name="enquire">Enquire-Balance</button>
    
    </form>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "awt";
    
    $mysql = new mysqli($servername, $username, $password, $dbname);
    If(!$mysql) die(“error”);
    if(isset($_POST['create'])){
        $name=$_POST['name'];
        $accno=$_POST['accno'];
        $amount=$_POST['amount'];
        if($amount<=500){
            echo "Minimum Balance is More then 500 is required";
        }
        else{
        $sql="insert into bank (name,accno,amount) values ('$name','$accno','$amount')";
if($mysql->query($sql)===TRUE)
    {
        header("Location:a55a.php");
    
    }
    else
    {

    echo "User Already Exists";
    }}


    }
   
    if(isset($_POST['withdraw'])){
        $name=$_POST['name'];
        $accno=$_POST['accno'];
        $amount=$_POST['amount'];
       
        $query="SELECT * from bank where accno='".$_POST["accno"]."'";
        $result = mysqli_query($mysql, $query);
        if($row = mysqli_fetch_array($result)){
              if ($row["amount"]<500){
                  echo 'No Sufficent Balance';
              }
              else{
                  $bal=$row['amount']-$amount;
                  if($bal<500){
                      echo "Your Blance After Withdraw is " .$bal. " please Maintain your Minimum balance 500!! Re-enter the Witdraw Amount!!";

                  }
                  else{

                    $sql="update bank set amount = '$bal' where accno='".$_POST["accno"]."'";
                    if($mysql->query($sql)===TRUE)
                        {
                            echo "Record Updated";
                            header("Location:a55a.php");
                        
                        }

                  }

              }
              }  


    }

    if(isset($_POST['deposit'])){
        $name=$_POST['name'];
        $accno=$_POST['accno'];
        $amount=$_POST['amount'];
        $query="SELECT * from bank where accno='".$_POST["accno"]."'";
        $result = mysqli_query($mysql, $query);
        if($row = mysqli_fetch_array($result)){
        $bal=$row['amount']+$amount;
        $sql="update bank set amount = '$bal' where accno='".$_POST["accno"]."'";
if($mysql->query($sql)===TRUE)
    {
        header("Location:a55a.php");
    
        
    }}
    }


    if(isset($_POST['enquire'])){
        $name=$_POST['name'];
        $accno=$_POST['accno'];
        $amount=$_POST['amount'];
        $query="SELECT * from bank where accno='".$_POST["accno"]."'";
        $result = mysqli_query($mysql, $query);
        if($row = mysqli_fetch_array($result)){
        echo "<br> Your Balance is " .$row['amount']." Thank You For Enquiring!!!";
        }
    }


    
    ?>
</body>
</html>