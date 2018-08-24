<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="_token" content="{!! csrf_token() !!}">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
      <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css">
   </head>
   <body>
      <div class="py-5" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/form_red.jpg&quot;);">
         <div class="container">
            <div class="row">
               <div class="align-self-center col-md-6 text-white">
                  <h1 class="text-center text-md-left display-3">Welcome to Greencat!
                     <br> 
                  </h1>
                  <p class="lead">Join and meet hundreds of Lasallians!</p>
               </div>
               <div class="col-md-6">
                  <div class="card">
                     <div class="card-body p-5">
                        <h3 class="pb-3">Login</h3>
                        <div id="alert-verify"class="alert alert-danger"></div>
                        <div class="form-group">
                           <label>Username</label>
                           <input id="username" class="form-control" name="username" placeholder="Enter username"> 
                        </div>
                        <div class="form-group">
                           <label>Password</label>
                           <input id="password" type="password" placeholder="Enter password" name="password" class="form-control"> 
                        </div>
                        <button id="login" type="submit" name="login" class="btn mt-2 btn-outline-dark">Login
                        </button><br> <br>
                        Not yet registered? <a href='/signup'> Sign up now!</a><br>
                        <a href="">Admin</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
      <script type="text/javascript">
		$('#alert-verify').hide();
		$(document).on('click','#login',function(e){
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
		})
		var formData = {
			username:$('#username').val(),
			password:$('#password').val(),
		}
		
		$.ajax({
			type: "POST",
			data:formData,
			url: '/loginAuthenticate',
			success: function (data) {
				console.log('Data Success:',data);
				if(data.response=='success'){
					window.location.href='swipematch';//security error will exist here by: PrivateAirJET
				}else if (data.response=='error'){
					$('#alert-verify').html('Error invalid username or password!');
					$('#alert-verify').show();
				}else if (data.response=='not-verified'){
                    alert('Wait for the user to get verified by the administrators!')
                }
			},
			error: function (data) {
				console.log('Data Error:', data);
			}
		});
		});
      </script>
   </body>
</html>