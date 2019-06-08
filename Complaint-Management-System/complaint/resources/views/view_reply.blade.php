<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-8 mx-auto">
				<div class="card card-header">
					<h3>View Reply</h3>
					<a href="{{url('login')}}">Go to Login</a>
					<a href="{{url('register')}}">Register Complaint</a>
				</div>
				<div class="card card-body">
					<form action="{{URL::to('view')}}" method="post">
					@csrf
						<div class="form-group">
							<label>Enter ID : </label>
							<input type="text" name="id" id="id" class="form-control">
						</div>
						<input type="submit" name="btn" id="btn" class="btn btn-dark" placeholder="See Reply">
					</form>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>

<?php
	if(isset($_REQUEST['btn'])) 
	{
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="card card-body mb-5">
						@foreach($record as $row)
						<div class="form-group">
						<label>Subject:</label>	
							<input type="text" name="name" value="{{ $row->subject }}" readonly="true" class="form-control">
						</div>
						<div class="form-group">
							<label>Description:</label>
							<textarea type="text" name="nme" value="" class="form-control" rows="4" readonly="">{{ $row->description }}</textarea>
						</div>
						<div class="form-group">
							<label>Date:</label>
							<input type="date" name="nae" value="{{ $row->date }}" class="form-control" readonly="">
						</div>
						<div class="form-group">
							<label>Reply:</label>
							<textarea type="text" name="n" value="" class="form-control" rows="4" readonly="">{{ $row->reply }}</textarea>
						</div>
						@endforeach
						<?php 
							if(count($record)==0)
							{
								echo "<h5>Reply Not Given Yet !!!</h5>";
							}
						 ?>
					</div>
				</div>
			</div>
		</div>
		<?php
	}
?>