<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" id=""></td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="number" name="phno" id=""></td>
            </tr>
            <tr>
                <td>Job:</td>
                <td><input type="text" name="job" id=""></td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="number" name="salary" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="SUBMIT"></td>
            </tr>

        </table>
    </form>
</body>
</html>
<form action="" method="POST">
    <table>
        <tr>
            <input type="submit" name="display" value="DISPLAY">
        </tr>
    </table>
</form>

<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $ph=$_POST['phno'];
    $job=$_POST['job'];
    $salary=$_POST['salary'];

    $conn=mysqli_connect('localhost','root','');
    if(!$conn){
        echo "connection error";
    }
    $db=mysqli_select_db($conn,'database');
    if(!$db){
        echo "db not connected";
    }
    $in="INSERT INTO details(t_name,t_phno,t_job,t_salary) VALUES('$name','$ph','$job','$salary')";
    $q=mysqli_query($conn,$in);
    if(!$q){
        echo "insertion error";
    }

}
if(isset($_POST['display'])){
    $conn=mysqli_connect('localhost','root','');
    if(!$conn){
        echo "connection error";
    }
    $db=mysqli_select_db($conn,'database');
    if(!$db){
        echo "db not connected";
    }
    $sel='SELECT * FROM details where t_salary>7452';
    $q1=mysqli_query($conn,$sel);
    if(!$q1){
        echo "error";
    }
    else{
        echo "<table border='2'>
        <tr>
          <td>NAME</td>
          <td>PHONE NO</td>
          <td>JOB</td>
          <td>SALARY</td>
        </tr>";
        while($row=mysqli_fetch_assoc($q1)){
            echo "<tr><td>".$row['t_name']."</td><td>".$row['t_phno']."</td><td>".$row['t_job']."</td><td>".$row['t_salary']."</td></tr>";
        }

      echo "</table>";

    }
}
?>
