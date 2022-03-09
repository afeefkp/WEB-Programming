<?php
$players=array('afef','badsfad','sfafda','sgfseer','sdfgfdsgr');
echo "<table border='2'><tr><th>SlNo</th><th>Name</th></tr>";
$k=1;
foreach($players as $k=>$v){
   echo"<tr><td>$k</td><td>$v</td></tr>";
 

}
echo"</table>";
?>