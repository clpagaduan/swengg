<!DOCTYPE html>

<?php
session_start();

//$dbc=mysqli_connect('localhost','root',null,'hello');
require_once('mysql_connect.php');




if (!$dbc) {
 die('Could not connect: '.mysql_error());




}
$id = $_GET['rid'];

         $query="SELECT * FROM hello.`user-status` as us join hello.users_details as u on u.userid =us.id join users as ue on ue.id = us.id where userid=$id
";
$result=mysqli_query($dbc,$query);
  while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){ 
 $first =$row['first_name'];
$last =$row['last_name'];    
 $username =$row['username'];
     $idnum =$row['dlsuID'];          

 $email =$row['email'];  
   $create =$row['created_at']; 
       $updated =$row['updated_at']; 
  } 

?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="greencat.css" type="text/css"> </head>

<body>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="">Admin
            <br> </h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <ul class="nav nav-pills flex-column">
           <li class="nav-item">
              <a class="nav-link disabled" href="adminDashboard.php">
                <i class="fa fa-home fa-home"></i>&nbsp;Dashboard</a>
            </li>
            <li class="nav-item">
              <a href="adminVerifyAccounts.php" class="nav-link disabled">
                <i class="fa fa-user fa-fw"></i>Verify Accounts &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="adminManageAccounts.php">
                <i class="fa fa-fw fa-search"></i>Manage Accounts
                <br> </a>
            </li>
    
            <li class="nav-item">
              <a class="nav-link disabled" href="login.php">
                <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
          </ul>
        </div>
        <div class="justify-content-center col-md-4">
          <div class="row">
            <div class="col-md-12">
             
            </div>
          </div>
          
          
                  <?php echo "
          
          
          <div class=\"card\">
            <img class=\"card-img-top\" src=\"https://pingendo.com/assets/photos/wireframe/photo-1.jpg\" alt=\"Card image cap\">
            <ul class=\"list-group list-group-flush\">
              <li class=\"list-group-item\">ID Number: $idnum</li>
              <li class=\"list-group-item\">Name: $last, $first</li>
              <li class=\"list-group-item d-flex justify-content-between align-items-start\">Username: $username</li>
              <li class=\"list-group-item\">DLSU Mail: $email/li>
              <li class=\"list-group-item d-flex justify-content-between align-items-start\">Date joined: $create</li>
              <li class=\"list-group-item d-flex justify-content-between align-items-start\">Last signed in: $updated</li>
            </ul>
   
          </div>"; ?>
           <a href="adminManageAccounts.php" class="btn btn-outline-primary">Back
                <br> </a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!--
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
-->

</body>

</html>