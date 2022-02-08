<?php
  include('config/constants.php');
?>


<html>
<head>
<title>book info</title>
</head>
<body>
<div>
<form method="POST">
    <h3 align="center"><u>BOOK INFORMATION</u></h3>
  <table align="center">
<tr>
  <td>Accession Number:</td>
  <td><input type="number" name="acc_no" value=""/></td>
</tr>
<tr>
<td>Title:</td>
<td><input type="text" name="title" value=""></td>
</tr>
<tr>
<td>Authors:</td>
<td><input type="text" name="author" value=""></td>
</tr>
<tr>
<td>Edition:</td>
<td><input type="number" name="edition" value=""></td>
</tr>
<tr>
<td>Publisher:</td>
<td><input type="text" name="publisher" value=""></td>
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


<div>
<form method="POST">
    <h3 align="center"><u>Search a Book</u></h3>
  <table align="center">
<tr>
  <td>Enter the Title:</td>
  <td><input type="text" name="titles"/></td>
</tr>
<tr>
<td><input type="submit" name="search" value="Search"></td>
</tr>
</table>
</form>
</span>
</div>


<?php
if(isset($_POST['submit']))
{
    $acc_no=$_POST['acc_no'];
    $title=$_POST['title'];
    $author=$_POST['author'];
    $edition=$_POST['edition'];
    $publisher=$_POST['publisher'];
    $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
    $db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
    $query="INSERT INTO info(acc_no,title,author,edition,publisher)VALUES('{$acc_no}','{$title}','{$author}','{$edition}','{$publisher}')";
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

if(isset($_POST['search']))
 { 
   $conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
   $db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
   $titles=$_POST['titles'];
    ?>
<table border="10" align="center">
<tr>
<th>Accession Number</th>
<th>Title</th>
<th>Authors</th>
<th>Edition</th>
<th>Publisher</th>
</tr>
<?php
$sql="SELECT * FROM info WHERE title LIKE '%$titles%'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
{
    ?>
   <tr>
    <td><?php echo $row['acc_no'];?></td>
    <td><?php echo $row['title'];?></td>
    <td><?php echo $row['author'];?></td>
    <td><?php echo $row['edition'];?></td>
    <td><?php echo $row['publisher'];?></td>
</tr>
<?php

}
}
?>
</table>
</body>
</html>