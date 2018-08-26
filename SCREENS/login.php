<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
    <?php
    session_start();
    
    $dbc=mysqli_connect('localhost','root','password','mydb');
    
    $flag=0;
    $message=null;
    if (isset($_POST['login'])){
        $empties=$invalid=0;
        
        if(!empty($_POST['username']) && (!empty($_POST['password']))){
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            echo $username;
            echo $password2=md5($password);
            
            $sql = 'SELECT id from users where username = "'.$username.'" AND password =("'.$password2.'")';
            
            $result = mysqli_query($dbc, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//            $active = $row['active'];
            $count = mysqli_num_rows($result);
            
            if ($count == 1){
                $_SESSION['username'] = $username;
                header("location: profileEdit.php");
            } else {
                echo "Error: " . mysqli_error($dbc);
            }
            
//            if($total = mysqli_num_rows($result)==1){
//                $_SESSION['username'] = $username;
//                header("location: profile.php");
//            } else {
//                echo "Error: " . mysqli_error($dbc);
//            }
        }
        if (empty($_POST['username'])){
          $username=FALSE;
          $un="<font color='red'>*</font>";
          $empties++;

        }
        if (empty($_POST['password'])){
          $password=FALSE;
          $pw="<font color='red'>*</font>";
          $empties++;

        }
        if ($empties >0){

            $message="<div class='alert alert-danger'><span aria-hidden='true'><b><center>Please do not leave the fields blank</center></span></div>";
        }
        
    }
    ?>
  <div class="py-5" style="background-image: url(bg.png);">
    <div class="container">
      <div class="row">
        <div class="align-self-center col-md-6 text-white">
          <h1 class="text-center text-md-left display-3">Welcome to Greencat!
            <br> </h1>
          <p class="lead">Join and meet hundreds of Lasallians!</p>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-body p-5">
              <h3 class="pb-3">Login</h3>
              <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
                <div class="form-group">
                  <label>Username</label>
                  <input class="form-control" name="username" placeholder="Username" value="<?php if (isset($_POST['username']) && !$flag) echo $_POST['username']; ?>"> </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" value="<?php if (isset($_POST['password']) && !$flag) echo $_POST['password']; ?>"> </div>
                <button type="submit" name="login" class="btn mt-2 btn-outline-dark">Login
                  </button><br> <br>
                  Not yet registered? <a href="signup.php"> Sign up now!</a><br>
                  <a href="">Admin</a>
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