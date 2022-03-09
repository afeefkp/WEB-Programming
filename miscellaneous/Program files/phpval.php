<!DOCTYPE html>
<html lang="en">
<head>
    <title>registration form</title>
</head>
<body bgcolor="lightblue">
    <form action="" method="POST">
        <table border="1">
            <tr>
                <td><label>1.USERNAME:</label></td>
                <td><input type="text" name="a" placeholder="enter the username"</td>
            </tr>
            <tr>
                <td><label>2.PASSWORD:</label></td>
                <td><input type="password" name="b" placeholder="enter password"</td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
<?php
 if(isset($_POST['submit']))
    {
        $username=$_POST['a'];
        $password=$_POST['b'];
        $uppercase=preg_match('@[A-Z]@',$password);
        $lowercase=preg_match('@[a-z]@',$password);
        $numbers=preg_match('@[0-9]@',$password);
        if($username=="")
          {
              echo "<b><script>alert('please enter your username');</script><br>";
          }
         if($password==""  && strlen($password)<8)
          {
              echo "<b>please enter 8 letter password <br> ";
          } 
         else if(!$uppercase || !$lowercase || !$numbers)
            {
                echo"<script>alert('your password is not strong');</script>";
            } 
         else
             {
                 echo "your password is strong";
             }
    }
    ?>