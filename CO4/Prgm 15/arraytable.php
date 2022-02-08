<?php
$players=array("Sachin Tendulkar","Kapil Dev","Sunil Gavaskar","Anil kumble","Rahul dravid","Sourav");
echo "<table border='1' width='50%'><tr><th>slno</th><th>Name</th></tr>";
$k=1;
foreach($players as $k=>$v)
{
   echo"<tr><td>$k</td><td>$v</td></tr>";
}
echo"</table>"
?>