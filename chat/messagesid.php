<!DOCTYPE html>

<?php
session_start();

$dbc=mysqli_connect('localhost','root',NULL,'swengg');

if (!$dbc) {
 die('Could not connect: '.mysql_error());
}





if (isset($_POST['submit'])){}



?>

  
  
  
  <?php

$query="SELECT * from s_chat_messages ORDER BY whenn DESC";
$result = mysqli_query($dbc, $query);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
if($row['id']==1){
   echo" <div  class=\"banner\">
<div class=\"container\">
  <p align=\"right\"> {$row['user']}</p>
  <p align=\"right\"> {$row['message']}</p>
  <span class=\"time-right\">{$row['whenn']}</span>
</div>
</div>"; }
    
    
    if($row['rid']==1){
    
   echo" <div  class=\"banner\">
<div class=\"container\">
<p align=\"left\"> {$row['user']}</p>
  <p> {$row['message']}</p>
  <span class=\"time-left\">{$row['whenn']}</span>
</div>
</div>"; }
}







 


    
  ?>
  
