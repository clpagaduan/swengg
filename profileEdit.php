<!DOCTYPE html>
<?php
if(!isset($_SESSION)){
    session_start();
    
$username = $_SESSION['username'];
echo $username; 
}
?>

<?php
    require_once('mysql_connect.php');
//    $dbc=mysqli_connect('localhost','root','password','mydb');
    $flag=0;
    $cn=$ca=$cnum=$cea=$cfn=$cln=$crnum=$cra=$un=$pw=$crea=NULL;
    $empties=$invalid=0;
    
    if (isset($_POST['update'])){
        $message=null;
        
//        $photo=$_POST['photo'];
        $fname=$_POST['firstname'];
        $sname=$_POST['lastname'];
        $age=$_POST['age'];
        $description=$_POST['description'];
        
        $interest1=$_POST['interest1'];
        $interest2=$_POST['interest2'];
        $interest3=$_POST['interest3'];
        $interest4=$_POST['interest4'];
        $interest5=$_POST['interest5'];
        
        $imagename  = $_FILES["myimage"]["name"];
        $imagetmp = addslashes(file_get_contents($_FILES['myimage']['tmp_name']));
        
        echo $username;
//        echo $photo;
        echo $age;
        echo $description;
        echo $interest1;
        
        $userID = 0;
        
        $queryID = "SELECT id from mydb.users WHERE username = '$username'";
        
        $resultID=mysqli_query($dbc,$queryID);
        $row = mysqli_fetch_array($resultID, MYSQLI_ASSOC);
            
        $userID = $row['id'];
        
        echo 'user id: ' . $userID;
        
        $query = "UPDATE mydb.users set firstname='$fname', lastname='$sname', photo='$imagetmp', age='$age', description='$description' WHERE username = '$username' ";
        
        $queryInterest = "UPDATE mydb.userpreferences set id='$userID', interest1='$interest1', interest2='$interest2' , interest3='$interest3', interest4='$interest4', interest5='$interest5'";
        if (mysqli_query($dbc, $queryInterest)){
                echo "Updated!";
            } else {
                echo "Error: " . mysqli_error($dbc);
            }
        
        
        if (mysqli_query($dbc, $query)){
            echo "Updated!";
            
//            header("location: profile.php");
        } else {
            echo "Error: " . mysqli_error($dbc);
        }
    }
        
    ?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>

<body>
    
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
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
              <label for="exampleInputEmail1">Photo</label><br>
              <input type="file" name="myimage" class="btn btn-info btn-fill btn"> </div>
            <div class="form-row">
                <div class="col">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="firstname" value="<?php if (isset($_POST['firstname']) && !$flag) echo $_POST['firstname']; ?>" id="inlineFormInput" placeholder="Juan">
                </div>
                <div class="col">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lastname" value="<?php if (isset($_POST['lastname']) && !$flag) echo $_POST['lastname']; ?>" id="inlineFormInput" placeholder="Dela Cruz">
                </div>
            </div>
              
            <div class="form-group">
              <label>Age</label>
              <input type="number" class="form-control" name="age" value="<?php if (isset($_POST['age']) && !$flag) echo $_POST['age']; ?>" placeholder="e.g. 19"> </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <input type="text" class="form-control" name="description" value="<?php if (isset($_POST['description']) && !$flag) echo $_POST['description']; ?>" id="inlineFormInput" placeholder="e.g. Write a witty description about yourself"> </div>
<!--
            <div class="form-group">
              <label for="exampleInputEmail1">Interest 1</label>
              <input type="text" class="form-control" name="interest1" value="<?php if (isset($_POST['interest1']) && !$flag) echo $_POST['interest1']; ?>" id="inlineFormInput" placeholder="e.g. Studying"> </div>
-->
            <input type='submit' name='update' class='btn btn-primary btn-fill' value='Update Profile'/> 
          </div>
          <div class="col-md-4">
              <h4> Interests </h4>
              <div class="form-group">
                <label>Favorite food</label>
                <input type="text" class="form-control" name="interest1" value="<?php if (isset($_POST['interest1']) && !$flag) echo $_POST['interest1']; ?>" id="inlineFormInput" placeholder="e.g. Ramen">
              </div>
              <div class="form-group">
                <label>Favorite movie</label>
                <input type="text" class="form-control" name="interest2" value="<?php if (isset($_POST['interest2']) && !$flag) echo $_POST['interest2']; ?>" id="inlineFormInput" placeholder="e.g. Star Wars">
              </div>
              <div class="form-group">
                <label>Favorite artist</label>
                <input type="text" class="form-control" name="interest3" value="<?php if (isset($_POST['interest3']) && !$flag) echo $_POST['interest3']; ?>" id="inlineFormInput" placeholder="e.g. Mark Hamill">
              </div>
              <div class="form-group">
                <label>Favorite song</label>
                <input type="text" class="form-control" name="interest4" value="<?php if (isset($_POST['interest4']) && !$flag) echo $_POST['interest4']; ?>" id="inlineFormInput" placeholder="e.g. USSR Anthem">
              </div>
              <div class="form-group">
                <label>Favorite video game</label>
                <input type="text" class="form-control" name="interest5" value="<?php if (isset($_POST['interest5']) && !$flag) echo $_POST['interest5']; ?>" id="inlineFormInput" placeholder="e.g. Battlefront II">
              </div>
<!--
            <div class="row">
              <div class="col-md-12">
                <table class="table">
                  <tbody>
                    <tr> </tr>
                    <tr>
                      <th>Interests</th>
                    </tr>
-->
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
<!--
                  </tbody>
                </table>
              </div>
-->
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