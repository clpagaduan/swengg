<!DOCTYPE html>

<?php
session_start();

$dbc=mysqli_connect('localhost','root',NULL,'swengg');





if (!$dbc) {
 die('Could not connect: '.mysql_error());




}


$chatid=1;
$id=1;
$rid=2;
$user="pepe";


if (isset($_POST['submit'])){
    

   $txt=$_POST['txt'];
$query="INSERT INTO s_chat_messages (chatid,id,rid,user,message,whenn) VALUES (NULL,'$id','$rid','$user','$txt',NOW())";
$result = mysqli_query($dbc, $query);
}

?>
    <html>

    <head>
       
       
        <link rel="stylesheet" href="msg.css">
        <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript">
        window.onload=function () {
     var objDiv = document.getElementById("sc");
     objDiv.scrollTop = objDiv.scrollHeight;
}
        
        </script>
        <script>
            $(document).ready(function() {
                setInterval(function() {
                    $("#screen").load('messagesid.php')
                }, 100);
            });
            
            function scrollToBottom() {


        var objDiv = document.getElementById("sc");
        objDiv.scrollTop = objDiv.scrollHeight;
    }


        </script>

    </head>

    <body>



<div>
    <h1> <?php echo"$user chat" ?></h1></div>
<div onload="" name="sc"style='overflow:auto; width:400px;height:400px;'>
        <div id="screen">


        </div>
        </div>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div >
               <input type="text" name="txt" required>
                <button type="submit" name="submit" >send

                    </button>
                    </div>
        </form>

    </body>

    </html>
