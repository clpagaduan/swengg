<!DOCTYPE html>
<html>
	<head>
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
								<a class="nav-link" href="messagelist.php">
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
							<img class="card-img-top mx-auto" src="https://pingendo.com/assets/photos/wireframe/photo-1.jpg" alt="Card image cap"> 
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Photo</label><br>
							<input type="file" name="myimage" class="btn btn-info btn-fill btn"> 
						</div>
						<div class="form-row">
							<div class="col">
								<label>First Name</label>
								<input type="text" class="form-control" name="firstname" value="" id="inlineFormInput" placeholder="Juan">
							</div>
							<div class="col">
								<label>Last Name</label>
								<input type="text" class="form-control" name="lastname" value="" id="inlineFormInput" placeholder="Dela Cruz">
							</div>
						</div>
						<div class="form-group">
							<label>Age</label>
							<input type="number" class="form-control" name="age" value="" placeholder="e.g. 19"> 
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Description</label>
							<input type="text" class="form-control" name="description" value="" id="inlineFormInput" placeholder="e.g. Write a witty description about yourself"> 
						</div>
						<input type='submit' name='update' class='btn btn-primary btn-fill' value='Update Profile'/> 
					</div>
					<div class="col-md-4">
						<h4> Interests </h4>
						<div class="form-group">
							<label>Favorite food</label>
							<input type="text" class="form-control" name="interest1" value="" id="inlineFormInput" placeholder="e.g. Ramen">
						</div>
						<div class="form-group">
							<label>Favorite movie</label>
							<input type="text" class="form-control" name="interest2" value="" id="inlineFormInput" placeholder="e.g. Star Wars">
						</div>
						<div class="form-group">
							<label>Favorite artist</label>
							<input type="text" class="form-control" name="interest3" value="" id="inlineFormInput" placeholder="e.g. Mark Hamill">
						</div>
						<div class="form-group">
							<label>Favorite song</label>
							<input type="text" class="form-control" name="interest4" value="" id="inlineFormInput" placeholder="e.g. USSR Anthem">
						</div>
						<div class="form-group">
							<label>Favorite video game</label>
							<input type="text" class="form-control" name="interest5" value="" id="inlineFormInput" placeholder="e.g. Battlefront II">
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
	</body>
</html>