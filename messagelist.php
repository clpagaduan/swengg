<!DOCTYPE html>


<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
 <?php
        if(!isset($_SESSION)){
        session_start();

    $username = $_SESSION['username'];
//    echo 'username: '. $username; 
    }
    require_once('mysql_connect.php');
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
    
   
    ?>
  <div class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Messages</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a href="#" class="nav-link disabled">
                <i class="fa fa-home fa-home"></i>&nbsp;Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">
                <i class="fa fa-user fa-fw"></i>Profile
                <br> </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fa fa-fw fa-search"></i>Browse
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <i class="fa fa-fw fa-inbox"></i>Messages
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-fw fa-cog"></i>Settings</a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 justify-content-center">
          <div class="card">
            <div class="card-header">Inbox</div>
              <div class="column" onload="" name="sc"style='overflow:auto; height:300px;'>
      <?php 
              
              
                  
                  
              $sql = "SELECT * FROM s_chat_messages WHERE id='$userID' group by user";
    $result = mysqli_query($dbc, $sql);
               while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                   
                  $ruser= $record['user'];
                    $ruserid= $record['rid'];
          $_SESSION['messagerec'] = $ruserid;
                  
                  $msg=$record['message'];
              echo"
            <a href=\"messages.php?id=$ruserid;\" class=\"nav-link active\">
            <div class=\"btn\" align=\"left\" >
              <h4 align=\"left\">$ruser</h4>
              <p align=\"left\">$msg</p>
            </div></a>";};
          ?>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
</body>

</html>