<!DOCTYPE html>
<?php 

//require_once('../mysql_connect.php');

?>
<html>
    


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
    <?php
    $dbc=mysqli_connect('localhost','root','password','mydb');
    $flag=0;
$cn=$ca=$cnum=$cea=$cfn=$cln=$crnum=$cra=$un=$pw=$crea=NULL;
$empties=$invalid=0;
    
    if(isset($_POST['register'])){
        $message=null;
        
        if (empty($_POST['username'])){
            $username=FALSE;
            $cn="<font color='red'>*</font>";
            $empties++;
            $message .= "Empty username \n";
        } else {
            $username=$_POST['username'];
        }
        
        if (empty($_POST['dlsuid'])){
            $dlsuid=FALSE;
            $ca="<font color='red'>*</font>";
            $empties++;
            $message .= "Empty ID number \n";
        } else {
            $dlsuid=$_POST['dlsuid'];
        }
        
        if (empty($_POST['email'])){
            $email=FALSE;
            $cnum="<font color='red'>*</font>";
            $empties++;
            $message .= "Empty email \n";
        } else {
            $email=$_POST['email'];
        }
        
        if (empty($_POST['password'])){
            $password=FALSE;
            $cea="<font color='red'>*</font>";
            $empties++;
            $message .= "Empty password \n";
        } else {
            $password=$_POST['password'];
        }
        
//        echo $username;
//        echo $dlsuid;
//        echo $email;
//        echo $password;
        
        $passwordNew = md5($password);
        
//        echo $passwordNew;
        $query = "INSERT INTO mydb.users (username, dlsuID, email, password) VALUES ('$username', '$dlsuid', '$email', '$passwordNew')"; 
        
//        $result = mysqli_query($dbc,$query);
        
        if (mysqli_query($dbc, $query)){
            echo "Registered!";
        } else {
            echo "Error: " . mysqli_error($dbc);
        }
        $message="<div class='alert alert-success'><span aria-hidden='true'><b><font color='black'><center>Account has been sent for approval!</center></font></span></div>";

$flag=1;
    }
    ?>
  <div class="py-5" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/form_red.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="align-self-center col-md-6 text-white">
          <h1 class="text-center text-md-left display-3">Sign up</h1>
          <p class="lead">Join and meet hundreds of Lasallians!</p>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body p-5">
              <h3 class="pb-3">Create an Account</h3>
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" name="username" value="<?php if (isset($_POST['username']) && !$flag) echo $_POST['username']; ?>" placeholder="Username" type="text" required> </div>
                <div class="form-group">
                  <label>ID Number</label>
                  <input type="number" class="form-control" name="dlsuid" value="<?php if (isset($_POST['dlsuid']) && !$flag) echo $_POST['dlsuid']; ?>" placeholder="e.g. 11412345" required> </div>
                <div class="form-group">
                  <label>Email Address</label>
                  <input type="email" class="form-control" name="email" value="<?php if (isset($_POST['email']) && !$flag) echo $_POST['email']; ?>" placeholder="e.g. juan_delacruz@dlsu.edu.ph" required> </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Password</label>
                  <input type="password" name="password" value="<?php if (isset($_POST['password']) && !$flag) echo $_POST['password']; ?>" class="form-control" required> </div>
                <button type="submit" name="register" class="btn mt-2 btn-outline-dark">Sign up
                  </button>
                  <br><br>
                  Already have an existing account? <a href="login.php"> Log in here.</a>
              </form>
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
<!--
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
-->
</body>

</html>