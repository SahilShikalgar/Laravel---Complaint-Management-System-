<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
		.mx-auto
		{
			margin-top: 60px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card card-header">
					<label class="h3">Register</label>
					<a href="{{url('view_reply')}}">View Reply</a>
				</div>
				 <div class="card card-body bg-light">
				 	<form action="{{URL::to('register_d')}}" method="post">
				 	 @csrf
					 	<div class="form-group">
					 		<label>Enter Subject:</label>
					 		<input type="text" name="subject" placeholder="Enter Subject" class="form-control">
					 	</div>
					 	<div class="form-group">
					 		<label>Enter Description</label>
					 		<textarea class="form-control" id="description" name="description" placeholder="Enter description..." required="" rows="10" 
					 	style="margin-top: 10px; margin-bottom: 0px; height: 245px;"></textarea>
					 	</div>
					 	<input type="submit" name="submit" placeholder="Submit" class="btn btn-success">
				 	</form>		 
				 </div>	
			</div>
		</div>
	</div>
</body>
</html>
