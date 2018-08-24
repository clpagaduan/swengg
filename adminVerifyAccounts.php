<!DOCTYPE html>

<?php
session_start();

$dbc=mysqli_connect('localhost','root',null,'hello');





if (!$dbc) {
 die('Could not connect: '.mysql_error());




}

if (isset($_POST['submit'])){
    
    $id=$_POST['updateid'];
    echo $id;
    $sql = "UPDATE hello.`user-status` SET  approved = 1 WHERE id = " . $_POST['updateid'];
  mysqli_query($dbc, $sql);
    
    
}

if (isset($_POST['no'])){
    
    $id=$_POST['updateid'];
    
    $sql = "UPDATE hello.`user-status` SET  disapproved = 1 WHERE id = " . $_POST['updateid'];
  mysqli_query($dbc, $sql);
    
    
}











?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

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
              <a href="#" class="nav-link disabled">
                <i class="fa fa-home fa-home"></i>&nbsp;Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="adminVerifyAccounts.php">
                <i class="fa fa-user fa-fw"></i>Verify Accounts &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <br> </a>
            </li>
            <li class="nav-item">
              <a href="adminManageAccounts.php" class="nav-link disabled">
                <i class="fa fa-fw fa-search"></i>Manage Accounts
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="messages.php">
                <i class="fa fa-fw fa-inbox"></i>Add Preferences &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <br> </a>
            </li>
       
            <li class="nav-item">
              <a class="nav-link disabled" href="login.php">
                <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
          </ul>
        </div>
        <div class="justify-content-center col-md-8">
          <table class="table">
            <thead>
              <tr>
                <th>ID Number</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Approve</th>
              </tr>
            </thead>
            <tbody>
    
              <?php 
                
                $query="SELECT * FROM hello.`user-status` as us join hello.users_details as u on u.userid =us.id join users as ue on ue.id = us.id
";
$result=mysqli_query($dbc,$query);
                
                
             while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){   $first =$row['first_name'];
               $last =$row['last_name'];                                                   
                 $approved =$row['approved'];
                 $disapproved =$row['disapproved'];                                                 
                                         $id =    $row['userID'];                                
                                                                  
                 $idnum =$row['dlsuID'];
               if($approved ==0 && $disapproved==0){
             echo"
             <form action=\"adminVerifyAccounts.php\" method=\"post\">
              <tr>
              
                <td> <a href=\"adminVerifyAccountsID.php?rid=$id\" class=\"nav-link active\">$idnum</a></td>
                <td>$last</td>
                <td>$first</td>
         
                <td><input type=\"submit\" value=\"Yes\" name=\"submit\" class=\"btn mt-0 btn-outline-dark\">
                <input type=\"submit\" value=\"No\" name=\"no\" class=\"btn mt-0 btn-outline-dark\">
                
                <input type = \"hidden\" name =\"updateid\" class=\"\" value=\"".$id."\">
                </td>
              </tr>
                </form>";}} ?>
              
              
       
            </tbody>
          </table>
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