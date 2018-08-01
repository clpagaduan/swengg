<!DOCTYPE html>
<?php
if(!isset($_SESSION)){
    session_start();
    
$username = $_SESSION['username'];
echo $username; 
}
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
    <?php
    require_once('mysql_connect.php');
//    $dbc=mysqli_connect('localhost','root','password','mydb');
    $flag=0;
    $cn=$ca=$cnum=$cea=$cfn=$cln=$crnum=$cra=$un=$pw=$crea=NULL;
    $empties=$invalid=0;
    
    if (isset($_POST['update'])){
        $message=null;
        
        $photo=$_POST['photo'];
        $age=$_POST['age'];
        $description=$_POST['description'];
        $interest1=$_POST['interest1'];
        
        echo $username;
        echo $photo;
        echo $age;
        echo $description;
        echo $interest1;
        
        $query = "UPDATE mydb.users set photo='$photo', age='$age', description='$description' WHERE username = '$username' ";
        
        if (mysqli_query($dbc, $query)){
            echo "Updated!";
            header("location: profile.php");
        } else {
            echo "Error: " . mysqli_error($dbc);
        }
    }
        
    ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
                <a href="browse.html" class="nav-link">
                  <i class="fa fa-fw fa-search"></i>Browse
                  <br> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="messages.php">
                  <i class="fa fa-fw fa-inbox"></i>Messages
                  <br> </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
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
              <img class="card-img-top mx-auto" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" alt="Card image cap"> </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Photo</label>
              <input type="file" class="form-control-file" name="photo" value="<?php if (isset($_POST['photo']) && !$flag) echo $_POST['photo']; ?>" id="inlineFormInput" placeholder="Jane Doe"> </div>
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" placeholder="e.g. Juan"> </div>
            <div class="form-group">
              <label>Age</label>
              <input type="number" class="form-control" name="age" value="<?php if (isset($_POST['age']) && !$flag) echo $_POST['age']; ?>" placeholder="e.g. 19"> </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <input type="text" class="form-control" name="description" value="<?php if (isset($_POST['description']) && !$flag) echo $_POST['description']; ?>" id="inlineFormInput" placeholder="e.g. Write a witty description about yourself"> </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Interest 1</label>
              <input type="text" class="form-control" name="interest1" value="<?php if (isset($_POST['interest1']) && !$flag) echo $_POST['interest1']; ?>" id="inlineFormInput" placeholder="e.g. Studying"> </div>
            <button type="submit" class="btn btn-primary" name="update">Save
              <br> </button>
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
                    <!--?php
                    $query = "SELECT interest1,interest2,interest3,interest4,interest5,interest6,interest7,interest8,interest9,interest10 FROM 'mydb.user-preferences' where ID='1'";
                   
 $result=mysqli_query($dbc,$query);
                    if (!$result) {
    printf("Error: %s\n", mysqli_error($dbc));
    exit();
}
            
                  
                    while($row = mysqli_fetch_array($result)) {
                   
	               
                    echo '
                  <tr--
                    <tr>
                      <td>
                        <input name="i1" type="text" value="'.$row['interest1'].'"> </td>
                    </tr>
                    <tr>
                      <td>
                        <input name="i2" type="text" value="'.$row['interest2'].'"> </td>
                    </tr>
                    <tr>
                      <td>
                        <input name="i3" type="text" value="'.$row['interest3'].'"> </td>
                    </tr>
                    <tr>
                      <td>
                        <input name="i4" type="text" value="'.$row['interest4'].'"> </td>
                    </tr>
                    <tr>
                      <td>
                        <input name="i5" type="text" value="'.$row['interest5'].'"> </td>
                    </tr>
                    <tr>
                      <td>
                        <input name="i6" type="text" value="'.$row['interest6'].'"> </td>
                    </tr>
                    <tr>
                      <td>
                        <input name="i7" type="text" value="'.$row['interest7'].'"> </td>
                    </tr>
                    <tr>
                      <td>
                        <input name="i8" type="text" value="'.$row['interest8'].'"> </td>
                    </tr>
                    <tr>
                      <td>
                        <input name="i9" type="text" value="'.$row['interest9'].'"> </td>
                    </tr>
                    <tr>
                      <td>
                        <input name="i10" type="text" value="'.$row['interest10'].'"> </td>
                    </tr>-->
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
      <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"> </div>
  </form>
<!--
  <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 10px;right:10px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:250px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;
    <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
  </pingendo>
-->
</body>

</html>