<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="uname" placeholder="enter username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="pw" placeholder="enter password"></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="number" name="phno" placeholder="enter phone number"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="SUBMIT"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $name=$_POST['uname'];
    $password=$_POST['pw'];
    $phone=$_POST['phno'];

    $ucase=preg_match('@[A-Z]@',$password);
    $lcase=preg_match('@[a-z]@',$password);
    $no=preg_match('@[0-9]@',$password);

    if($password==""){
        echo "password cannot be blank<br>";
    }
    else if(!$ucase||!$lcase||!$no){
        echo "password is not strong <br>";
    }
    else{
        echo "password is strong <br>";
    }

    if($name==""){
        echo "enter username <br>";
    }
    if($phone==""){
        echo "enter 10 digit mobile no<br>";
    }
    
}