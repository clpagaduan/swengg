<!DOCTYPE html>

<?php
session_start();

$dbc=mysqli_connect('localhost','root','password','mydb');

$username = $_SESSION['username'];
   $messagerec =$_SESSION['messagerec'];



if (!$dbc) {
 die('Could not connect: '.mysql_error());




}

$sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($dbc, $sql);
    while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    
        $userID = $record['id'];
        $fname = $record['firstname'];
        $sname = $record['lastname'];
        $dlsuID = $record['dlsuID'];
        $age = $record['age'];
        $description = $record['description'];
        $rawPhoto = $record['photo'];
        $photo = '<img src="data:image/jpeg;base64,'.base64_encode($rawPhoto).'"style="width:300px;height:300px"/>';
        
      
//    echo $photo;
//    echo 'username1: '. $username1;
    };

$id=$userID;
$rid=$messagerec;
$user=$username;






?>

  
  
  
  <?php

$query="SELECT * from s_chat_messages ORDER BY whenn DESC";
$result = mysqli_query($dbc, $query);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
if($row['id']==$id){
   echo" <div  class=\"banner\">
<div class=\"containers\">
  <p align=\"right\"> {$row['user']}</p>
  <p align=\"right\"> {$row['message']}</p>
  <span class=\"time-right\">{$row['whenn']}</span>
</div>
</div>"; }
    
    
    if($row['rid']==$rid){
    
   echo" <div  class=\"banner\">
<div class=\"containers darker\">
<p align=\"left\"> {$row['user']}</p>
  <p> {$row['message']}</p>
  <span class=\"time-left\">{$row['whenn']}</span>
</div>
</div>"; }
}







 


    
  ?>
  
