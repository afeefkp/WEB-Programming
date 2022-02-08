
<?php
  include('config/constants.php');
?>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Validation</title>
</head>
<body>
<h2>FORM VALIDATION</h2>
<form name="form" action="" method="POST">
    <table>
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"> </td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="email" name="email"> </td>
        </tr>
        <tr>
            <th>Mob no </th>
            <td><input type="tel" name="mob"> </td>
        </tr>
        <tr>
            <th>Username </th>
            <td><input type="text" name="username"> </td>
        </tr>
        <tr>
            <th>Password </th>
            <td><input type="password" name="password"> </td>
        </tr>
        <tr class="center">
            <th><input type="submit" value="submit" name="submit"></th>
            <th>
            <input type="button" value="Display" onclick="msg()">
</th>
        </tr>
     
    </table>
</form>
<script>
function msg() {
    location.replace("display.php")
}
</script>

<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];  
    $email = $_POST['email'];  
    $mob= $_POST['mob'];  
    $username = $_POST['username'];  
    $password = $_POST['password'];

    if($_POST['name'] == ""){
        echo "<script>alert('Enter First Name !!')</script>";
    }
    else if(!preg_match("/^[a-zA-Z ]*$/",$name)){
        echo "<script>alert('Enter Your  Name !!')</script>";
    }
    else if($_POST['email'] == ""){
        echo "<script>alert('Enter Email !!')</script>";
    }
    else if(!preg_match('/^[0-9]{10}+$/', $_POST['mob'])){
        echo "<script>alert('Enter Valid Mobile Number !!')</script>";
    }
    else if($_POST['username'] == ""){
        echo "<script>alert('Enter User Name !!')</script>";
    }
    else if($_POST['password'] == ""){
        echo "<script>alert('Enter Password !!')</script>";
    }
    else if (strlen($_POST["password"]) < 8) {
            echo "<script>alert('Your Password Must Contain At Least 8 Characters!')</script>";
    }
    else if(!preg_match("#[0-9]+#",$password)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Number!')</script>";
     }
    else if(!preg_match("#[A-Z]+#",$password)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Capital Letter!')</script>";
    }
    else if(!preg_match("#[a-z]+#",$password)) {
            echo "<script>alert('Your Password Must Contain At Least 1 Lowercase Letter!')</script>";
    } 
    else{
   
       $name = $_POST['name'];  
       $email = $_POST['email'];  
       $mob = $_POST['mob'];  
       $username = $_POST['username'];  
       $password = $_POST['password'];
       //Connecting Database
   

    $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
    $db_select=mysqli_select_db($conn,DB_NAME);
  



    $query = "INSERT INTO reg (name, email, mob,username,password)
    VALUES ('$name', '$email', '$mob','$username','$password')";
    $res=mysqli_query($conn,$query);
    if($res==true)
    {
        echo"data added succesfully";
        
    }
    }
}

?>
</body>
</html>
