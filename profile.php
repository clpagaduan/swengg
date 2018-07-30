<!DOCTYPE html>


<?php
session_start();

$dbc=mysqli_connect('localhost','root',NULL,'swengg');

if (!$dbc) {
 die('Could not connect: '.mysql_error());
}




if (isset($_POST['submit'])){}



?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
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
              <a class="nav-link active" href="profile.html">
                <i class="fa fa-user fa-fw"></i>Profile
                <br> </a>
            </li>
            <li class="nav-item">
              <a href="browse.html" class="nav-link">
                <i class="fa fa-fw fa-search"></i>Browse
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="messages.html">
                <i class="fa fa-fw fa-inbox"></i>Messages
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="fa fa-fw fa-cog"></i>Settings</a>
            </li>
          </ul>
        </div>
        <div class="col-md-4 justify-content-center">
          <div class="card">
            <img class="card-img-top mx-auto" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Delo, 21</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
              <button class="btn btn-primary" name="submit" type="submit">Edit Profile</button>
               
                <br> 
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <table class="table">
                <tbody>
                  <tr> </tr>
                  <tr>
                    <th>Interests</th>
                  </tr>
                  <?php
                    $query = "SELECT interest1,interest2,interest3,interest4,interest5,interest6,interest7,interest8,interest9,interest10 FROM userpreferences where ID=1";
                   
 $result=mysqli_query($dbc,$query);
                    if (!$result) {
    printf("Error: %s\n", mysqli_error($dbc));
    exit();
}
            
                  
                    while($row = mysqli_fetch_array($result)) {
                   
	               
                    echo '
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
                  </tr>'; }  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
   
  </div>
  </form>
</body>

</html>