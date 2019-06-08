<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<title></title>
	<script type="text/javascript">
		function change()
		{
			if(document.getElementById('new').value===document.getElementById('confirm').value)
			{
				document.getElementById('btn').disabled=false;
			}
			else
			{
				document.getElementById('btn').disabled=true;
			}
		}
	</script>
</head>
<body>
	@include('navbar')
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6 mx-auto">
				<div class="card card-header">
					<h3>Change Password</h3>
				</div>
				<div class="card card-body">
					<form action="{{URL::to('change_password_action')}}" method="post">
					@csrf
						<div class="form-group">
							<label>Enter Old Password</label>
							<input type="text" name="old" id="old" placeholder="Old Password" class="form-control">
						</div>
						<div class="form-group">
							<label>Enter New Password</label>
							<input type="text" name="new" id="new" placeholder="New Password" class="form-control" onkeyup="change()">
						</div>
						<div class="form-group">
							<label>Enter Confirm Password</label>
							<input type="text" name="confirm" id="confirm" placeholder="Confirm Password" class="form-control" onkeyup="change()">
						</div>
						<input type="submit" name="submit" placeholder="Change Password" class="form-control btn btn-primary" disabled="" id="btn">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>