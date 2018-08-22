<!DOCTYPE html>
<html>
	<head>
		<meta name="_token" content="{!! csrf_token() !!}">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css">
	</head>
	<body>
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
								<a class="nav-link active" href="/profile">
								<i class="fa fa-user fa-fw"></i>Profile
								<br> </a>
							</li>
							<li class="nav-item">
								<a href="/swipematch" class="nav-link disabled">
								<i class="fa fa-fw fa-search"></i>Browse
								<br> </a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="/message">
								<i class="fa fa-fw fa-inbox"></i>Messages
								<br> </a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="/settings">
								<i class="fa fa-fw fa-cog"></i>Settings</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="/logout">
								<i class="fa fa-fw fa-sign-out"></i>Logout</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4 justify-content-center">
						<input id="userID" type="hidden" value="{{$user->userID}}"/>
						<div class="card">
								<img src="data:image/jpeg;base64,{{base64_encode($user->photo)}}"/>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Photo</label><br>
							<input id="photo" type="file" value="{{$user->photo}}" name="myimage" class="btn btn-info btn-fill btn"> 
						</div>
						<div class="form-row">
							<div class="col">
								<label>First Name</label>
								<input id="first_name" type="text" class="form-control" name="firstname" value="{{$user->first_name}}" id="inlineFormInput" placeholder="Juan">
							</div>
							<div class="col">
								<label>Last Name</label>
								<input id="last_name" type="text" class="form-control" name="lastname" value="{{$user->last_name}}" id="inlineFormInput" placeholder="Dela Cruz">
							</div>
						</div>
						<div class="form-group">
							<label>Age</label>
							<input id="age" type="number" class="form-control" name="age" value="{{$user->age}}" placeholder="e.g. 19"> 
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Description</label>
							<input id="description" type="text" class="form-control" name="description" value="{{$user->description}}" id="inlineFormInput" placeholder="e.g. Write a witty description about yourself"> 
						</div>
						<input id="submitEditProfile" type='submit' name='update' class='btn btn-primary btn-fill' value='Update Profile'/> 
					</div>
					<div class="col-md-4">
						<h4>Interests for Filter </h4>
						<div class="form-group">
							<label>DLSU College</label>
							<select id="interest1">
                <option disabled selected value="{{$user->interest1}}">{{$user->interest1}}</option>
                <option>CCS</option>
                <option>CLA</option>
                <option>COB</option>
                <option>COS</option>
              </select>
						</div>
						<div class="form-group">
							<label>CGPA Range</label>
              <select id="interest2"  value="{{$user->interest2}}">
                  <option disabled selected value="{{$user->interest2}}">{{$user->interest2}}</option>
                  <option>2.0</option>
                  <option>2.5</option>
                  <option>3.0</option>
                  <option>3.5</option>
                  <option>4.0</option>
                </select>
						</div>
					
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16">
		<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"> </div>

		<script>
			$(document).on('click','#submitEditProfile',function(e){
				alert($('#photo')[0].files[0].name);

			  var verify = confirm('Do you want to add these details to the user?')
			  if(verify==true){
			      $.ajaxSetup({
			          headers: {
			              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			          }
			      })
			      var formData = {
			          userID:$('#userID').val(),
			          photo:$('#photo')[0].files[0].name,
			          first_name:$('#first_name').val(),
			          last_name:$('#last_name').val(),
			          age:$('#age').val(),
			          description:$('#description').val(),
			          interest1:$('#interest1').val(),
			          interest2:$('#interest2').val(),
			      }
			    
			      $.ajax({
			        type: "POST",
			        data:formData,
			        url: '/editUserProfile',
			        success: function (data) {
                        console.log('Data Success:',data);
                         location.reload();
                    },
                    error: function (data) {
                    console.log('Data Error:', data);
                    }
			    });
			  }
			  return false;
			});
		</script>
	</body>
</html>