<?php
$dbc=mysqli_connect('localhost','root',null,'hello');

if (!$dbc) {
 die('Could not connect: '.mysql_error());
}

?>