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
						<h1 class="text-center text-md-left display-3">Sign up</h1>
						<p class="lead">Join and meet hundreds of Lasallians!</p>
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-body p-5">
								<h3 class="pb-3">Create an Account</h3>
								<div class="form-group">
									<label>Username</label>
									<input id="username" class="form-control" name="username" placeholder="Username" type="text" required> 
								</div>
								<div class="form-group">
									<label>ID Number</label>
									<input id="dlsuID" type="number" class="form-control" name="dlsuid" placeholder="e.g. 11412345" required> 
								</div>
								<div class="form-group">
									<label>Email Address</label>
									<input id="email" type="email" class="form-control" name="email" placeholder="e.g. juan_delacruz@dlsu.edu.ph" required> 
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Password</label>
									<input id="password" type="password" name="password" class="form-control" required> 
								</div>
								<button id="signup" type="submit" name="register" class="btn mt-2 btn-outline-dark">Sign up
								</button>
								<br><br>
								Already have an existing account? <a href='/login'>Log in here.</a>
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
			$(document).on('click','#signup',function(e){
			  var verify = confirm('Do you want to add this user?')
			  if(verify==true){
			      $.ajaxSetup({
			          headers: {
			              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			          }
			      })
			      var formData = {
			          username:$('#username').val(),
			          password:$('#password').val(),
			          dlsuID:$('#dlsuID').val(),
			          email:$('#email').val(),
			      }
			    
			      $.ajax({
			        type: "POST",
			        data:formData,
			        url: '/signupRegistration',
			        success: function (data) {
                        console.log('Data Success:',data);
                        if(data.response=='success'){
                            window.location.href='swipematch';//security error will exist here by: PrivateAirJET
                        }
                    },
                    error: function (data) {
                    console.log('Data Error:', data);
                    }
			    });
			  }
			  return false;
			});
        </script>

        <script type="text/javascript">
            //REGEX Validation here
            //By:John Edel B. Tamani

            $(document).on('change','#username',function(e){
                var str = $('#username').val();
                var pattern = /^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/g;
                var result = str.match(pattern);

                $.ajaxSetup({
			          headers: {
			              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			          }
			      })
			      var formData = {
			          match:result,
			      }
			    
			      $.ajax({
			        type: "POST",
			        data:formData,
			        url: '/liveUsernameCheck',
			        success: function (data) {
                        console.log('Data Success:',data);
                    },
                    error: function (data) {
                        console.log('Data Error:', data);
                    }
			    });
            }

            $(document).on('change','#dlsuID',function(e){
                var str = $('#username').val();
                var pattern = /^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/g;
                var result = str.match(pattern);

                $.ajaxSetup({
			          headers: {
			              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			          }
			      })
			      var formData = {
			          match:result,
			      }
			    
			      $.ajax({
			        type: "POST",
			        data:formData,
			        url: '/liveUsernameCheck',
			        success: function (data) {
                        console.log('Data Success:',data);
                    },
                    error: function (data) {
                        console.log('Data Error:', data);
                    }
			    });
            }   

            $(document).on('change','#email',function(e){

            }
            var str = "Is this all there is?";
            var patt1 = //g;
            var result = str.match(patt1);

        </script>
	</body>
</html>