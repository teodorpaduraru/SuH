<?php

 require 'dbh.inc.php';

 &sql = "SELECT * FROM standings ORDER_BY Points desc";

 echo"<table border='1'>";
 echo"<tr><td>Username</td><td>Points</td></tr>\n";
 while($row = mysqli_fetch_assoc($result))
 {
	  echo"<tr><td>{$row['Username']}</td><td>{$row['Points']}</td>/<tr>\n";
 }

 echo"</table>";

 ?>