<?php
  include('config/constants.php');
?>


<html>
<head>
<title>Employee Details</title>
</head>
<body>
<div>
<form method="POST">
    <h3 align="center"><u>EMPLOYEE DETAILS</u></h3>
  <table align="center">
<tr>
  <td>Employee id</td>
  <td><input type="number" name="emp_id" value=""/></td>
</tr>
<tr>
<td>Employee Name</td>
<td><input type="text" name="emp_name" value=""></td>
</tr>
<tr>
<td>Enter the job</td>
<td><input type="text" name="job_name" value=""></td>
</tr>
<tr>
<td>Enter the manager id</td>
<td><input type="number" name="manager_id" value=""></td>
</tr>
<tr>
<td>Enter the salary</td>
<td><input type="number" name="salary" value=""></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
</tr>
</table>
</form>
</div>
<br>
<br>
<br>

<?php
if(isset($_POST['submit']))
{
    $emp_id=$_POST['emp_id'];
    $emp_name=$_POST['emp_name'];
    $job_name=$_POST['job_name'];
    $manager_id=$_POST['manager_id'];
    $salary=$_POST['salary'];
    $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
    $db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
    $query="INSERT INTO emp(emp_id,emp_name,job_name,manager_id,salary)VALUES('{$emp_id}','{$emp_name}','{$job_name}','{$manager_id}','{$salary}')";
    $res=mysqli_query($conn,$query);
    if($res==true)
    {   
        echo "Data inserted Sucessfully";
        echo "<br>";
    }
    else
    {
    echo("insertion failed");
    }

}
?>
<table border="10" align="center">
    <tr>
    <th>Employee Name</th>
    <th>Salary</th>
    </tr>
<?php
    $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
    $db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
    $sql="SELECT emp_name,salary FROM emp WHERE salary>35000";
    $res=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($res))
    {
    ?>
    <tr>
    <td><?php echo $row['emp_name'];?></td>
    <td><?php echo $row['salary'];?></td>
    </tr>
    <?php


   }
?>
</table>
</body>
</html>
