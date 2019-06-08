<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<style type="text/css">
		.mx-auto
		{
			margin-top: 70px;
		}
	</style>
</head>
<body>
	@include('navbar')
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card card-header bg-dark text-white">
					<h4>Report Generation</h4>
				</div>
				<div class="card card-body">
				<form action="{{URL::to('report')}}" method="post">
				@csrf
					<div class="form-group">
						<label>Start Date :</label>
						<input type="date" name="date1" class="form-control">
					</div>
					<div class="form-group">
						<label>End Date :</label>
						<input type="date" name="date2" class="form-control">
					</div>
					<input type="submit" name="btn" class="btn btn-dark" value="Generate Report">
				</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>