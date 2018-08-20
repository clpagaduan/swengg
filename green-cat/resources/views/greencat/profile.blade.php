<!DOCTYPE html>
<?php
	?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
		<link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css">
	</head>
	<body>
		<form action="profileEdit.php" method="post">
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
								<a class="nav-link active" href="profile">
								<i class="fa fa-user fa-fw"></i>Profile
								<br> </a>
							</li>
							<li class="nav-item">
								<a href="swipematch" class="nav-link disabled">
								<i class="fa fa-fw fa-search"></i>Browse
								<br> </a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="message">
								<i class="fa fa-fw fa-inbox"></i>Messages
								<br> </a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="settings">
								<i class="fa fa-fw fa-cog"></i>Settings</a>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="logout">
								<i class="fa fa-fw fa-sign-out"></i>Logout</a>
							</li>
						</ul>
					</div>
					<div class="col-md-4 justify-content-center">
						<div class="card">
							<div class="card">
								<center>
								</center>
							</div>
							<div class="card-body">
								<h5 class="card-title">
								</h5>
								<p class="card-text">About me: @if(isset(Auth::user()->description)) {{Auth::user()->description}} @else N/A @endif <br>
								<p class="card-text">Interests: 
									<br>
								</p>
							</div>
							<div class="card-footer">
                                <a href="editprofile"><button class="btn btn-primary" name="submit">Edit Profile</button></a>
								<br> 
							</div>
						</div>
					</div>
				</div>
				<?php  ?>
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
			</div>
		</form>
	</body>
</html>