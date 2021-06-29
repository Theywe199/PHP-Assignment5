<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="a54b.php" method="post" enctype="multipart/form-data">
    <label for="">Passport Number: </label>
    <input type="text" name="pno"> <br><br>
    <label for="">First Name: </label>
    <input type="text" name="fname"> <br><br>
    <label for="">Last Name: </label>
    <input type="text" name="lname"> <br><br>
    <label for="">Nation: </label>
    <input type="text" name="nation"> <br><br>
    <label for="">Date Of Birth: </label>
    <input type="date" name="dob"> <br><br>
    <label for="">Address: </label>
   <textarea name="address" id="" cols="30" rows="5"></textarea> <br><br>
   <label for="">Gender: </label>
    <input type="radio" name="gender" value="Male">
    <input type="radio" name="gender" value="Female"> <br><br>
    <label for="">Upload Photo: </label>
    <input type="file" name="photoupload"> <br><br>
    <button name="submit">Submit</button>
    <button name="delete">Delete</button>
    <button name="update">Update</button>
    </form>
    
</body>
</html>