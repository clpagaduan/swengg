<!DOCTYPE html>
<?php

?>
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
    echo 'username: '. $username; 
    }
    require_once('mysql_connect.php');
    
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($dbc, $sql);
    while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    
    $username1 = $record['username'];
    $dlsuID = $record['dlsuID'];
    $age = $record['age'];
    $description = $record['description'];
    $rawPhoto = $record['photo'];
    $photo = '<img src="data:image/jpeg;base64,'.base64_encode($rawPhoto).'"style="width:30px;height:30px"/>';
    
    echo 'username1: '. $username1;
    };
    ?>
    
  <form action="profileEdit.php" method="post">
    <div class="py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="">Profile</h1>
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
                  <i class="fa fa-home fa-home"></i>&nbsp;Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="profile.php">
                  <i class="fa fa-user fa-fw"></i>Profile
                  <br> </a>
              </li>
              <li class="nav-item">
                <a href="browse.html" class="nav-link disabled">
                  <i class="fa fa-fw fa-search"></i>Browse
                  <br> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="messages.html">
                  <i class="fa fa-fw fa-inbox"></i>Messages
                  <br> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#">
                  <i class="fa fa-fw fa-cog"></i>Settings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="login.php">
                  <i class="fa fa-fw fa-sign-out"></i>Logout</a>
              </li>
            </ul>
          </div>
          <div class="col-md-4 justify-content-center">
            <div class="card">
              <img class="card-img-top mx-auto" src="<?php $photo; ?>" alt="Card image cap">
                
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $photo. $username1. ', '.$age. ' (' .$dlsuID. ')';?>
                  </h5>
                <p class="card-text"><?php echo $description;?></p>
                <button class="btn btn-primary" name="submit" type="submit">Edit Profile</button>
                <br> </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-md-12"> '; } ?&gt;
                <table class="table">
                  <tbody>
                    <tr> </tr>
                    <tr>
                      <th>Interests</th>
                    </tr>
                    <!--?php
                    $query = "SELECT interest1,interest2,interest3,interest4,interest5,interest6,interest7,interest8,interest9,interest10 FROM mydb.userpreferences where ID=1";
                   
 $result=mysqli_query($dbc,$query);
                    if (!$result) {
    printf("Error: %s\n", mysqli_error($dbc));
    exit();
}
            
                  
                    while($row = mysqli_fetch_array($result)) {
                   
	               
                    echo '
                  <tr-->
                    <tr>
                      <td>'.$row['interest1'].'</td>
                    </tr>
                    <tr>
                      <td>'.$row['interest2'].'</td>
                    </tr>
                    <tr>
                      <td>'.$row['interest3'].'</td>
                    </tr>
                    <tr>
                      <td>'.$row['interest4'].'</td>
                    </tr>
                    <tr>
                      <td>'.$row['interest5'].'</td>
                    </tr>
                    <tr>
                      <td>'.$row['interest6'].'</td>
                    </tr>
                    <tr>
                      <td>'.$row['interest7'].'</td>
                    </tr>
                    <tr>
                      <td>'.$row['interest8'].'</td>
                    </tr>
                    <tr>
                      <td>'.$row['interest9'].'</td>
                    </tr>
                    <tr>
                      <td>'.$row['interest10'].'</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php  ?>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
      <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"> </div>
  </form>
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
</body>

</html>