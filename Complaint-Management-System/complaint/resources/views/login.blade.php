<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-5 mx-auto">
				<div class="card card-header">
					<center><h3 class="text-info">Login Form</h3></center>
				</div>
				<div class="card card-body">
					<form method="post" action="{{URL::to('login_action')}}">
					@csrf
						<div class="form-group">
							<label>Enter Username : </label>
							<input type="text" name="name" placeholder="Enter Username" class="form-control">
						</div>
						<div class="form-group">
							<label>Enter Password : </label>
							<input type="password" name="password" placeholder="Enter Password" class="form-control">
						</div>
						<input type="submit" name="login" value="Login" class="btn btn-primary" placeholder="Login">
						<input type="reset" name="reset" class="btn btn-dark" placeholder="Reset">
					</form>
					<a href="{{url('register')}}" class="mt-3">Register for Complaint</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>