<?php
$db = mysqli_connect("localhost","root","dbpassword");
if ($db) 
{
   echo "Could not connect to database".mysqli_error($db);
}
?>
