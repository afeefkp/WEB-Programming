<?php
  include('config/constants.php');
?>
<html>
    <head>
        <title>display list</title>
    </head>
<body>
<div class="all-lists">
<table border="10">
<tr>
    <th>Sno</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile no</th>
    
</tr>

<?php


$conn=mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());
$db_select=mysqli_select_db($conn,DB_NAME) or die(mysqli_error());

$sql="SELECT name,email,mob FROM reg";
$res=mysqli_query($conn,$sql);

if($res==true)
{
    //echo "successful";
    $count_rows=mysqli_num_rows($res);//count no of rows 
    
    //count serial number here we cant use list id becaus when we delete a row from db the order of number is not same 
    //so by creating a serial number it will increment automatically when loop circles

    $sn=1;

    //check whether there is data in database or not

    if($count_rows>0)
    {
         while ($row=mysqli_fetch_assoc($res))
         {
             //getting data from database
             $name=$row['name'];
             $email=$row['email'];
             $mob=$row['mob'];
           

             ?>
             <tr>
               <td><?php echo $sn++;?></td>
               <td><?php echo $name;?></td>
               <td><?php echo $email;?></td>
               <td><?php echo $mob;?></td>
             
             </tr>
             <?php
         }
    }
    else 
    {
      //no data in database
      ?>
      <tr>
          <td colspan="3">No list is added yet.</td>
      </tr>
      <?php  
    }
}
?>


</table>

</div>
<a href="form">Register here</a>
</body>
</html>