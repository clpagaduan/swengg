<?php
$dbc=mysqli_connect('localhost','root',null,'mydb');

if (!$dbc) {
 die('Could not connect: '.mysql_error());
}

?>