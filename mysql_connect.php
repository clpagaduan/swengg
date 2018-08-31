<?php
$dbc=mysqli_connect('localhost','root','password','mydb');

if (!$dbc) {
 die('Could not connect: '.mysql_error());
}

?>