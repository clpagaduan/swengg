<!DOCTYPE html>

<?php
session_start();

$dbc=mysqli_connect('localhost','root',null,'swengg');





if (!$dbc) {
 die('Could not connect: '.mysql_error());




}


$chatid=1;
$id=1;
$rid=2;
$user="user1";


if (isset($_POST['submit'])){
    
//echo 'henlo';
   $txt=$_POST['txt'];
$query="INSERT INTO s_chat_messages (chatID,id,rid,user,message,whenn) VALUES (NULL,'$id','$rid','$user','$txt',NOW())";
//$result = mysqli_query($dbc, $query);
    
    if (mysqli_query($dbc, $query)){
//            echo "Registered!";
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
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> <link rel="stylesheet1" href="msg.css" type="text/css">
     <link rel="stylesheet" href="msg1.css">
            <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
            <script>
                $(document).ready(function() {
                    setInterval(function() {
                        $("#screen").load('messagesid.php')
                    }, 100);
                });

            </script>
  
  </head>
<body>
 
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
              <a href="browse.html" class="nav-link">
                <i class="fa fa-fw fa-search"></i>Browse
                <br> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="messages.php">
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
        <div class="col-md-6 justify-content-center border">
          <div class="container">
            <div class="col">
              <div class="row-md-12 border-primary border">
                <img src="../../../Users/Danielle Marie/Desktop/Files/p12348.jpg" height="100" width="100" class="img">
                <span class="testimonials-name"><?php echo"{$user}" ?></span>
              </div>
            </div>
          </div>
          
          <div class="container content">
           
           
           
            <div class="row" onload="" name="sc"style='overflow:auto; height:300px;'>
            
                
                 
                  
           <div id="screen">


        </div>
                
                  
                 
                
              
            </div>
             <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="col">
              <div class="row">
               
                <div class="col-md-9">
                  <input type="msg" class="form-control" id="pwd" style="opacity: 0.5;" placeholder="enter message here"name="txt" required> </div>
                <div class="col-md-3" align="right">
                      <button class="btn btn-primary btn-block"  type="submit" name="submit" >Send

                    </button>
                </div>
              </div>
            </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</body>

</html>