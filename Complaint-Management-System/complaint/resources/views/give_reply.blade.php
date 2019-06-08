<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<title></title>
</head>
<body>
   <div class="container">
   	<div class="row mt-5">
   		<div class="col-md-8 mx-auto">
   			<div class="card card-header">
   				<h3>Reply for Complaint</h3>
   			</div>
   			<div class="card card-body">
   				<form action="{{URL::to('reply')}}" method="post">
   					@csrf
   					<div class="form-group">
   						<label>Complaint ID:</label>
   						<input type="text" name="random" readonly="" class="form-control" value="<?php echo $record[0]->random; ?>">
   					</div>
   					<div class="form-group">
   						<label>Date:</label>
   						<input type="date" name="date" readonly="" class="form-control" value="<?php echo $record[0]->date; ?>">
   					</div>
   					<div class="form-group">
   						<label>Subject:</label>
   						<input type="text" name="subject" readonly="" class="form-control" value="<?php echo $record[0]->subject; ?>">
   					</div>
   					<div class="form-group">
   						<label>Description:</label>
   						<textarea name="description" rows="4" class="form-control" readonly=""><?php echo $record[0]->description; ?></textarea>
   					</div>	
   					<div class="form-group">
   						<label>Enter Reply:</label>
   						<textarea name="reply" rows="4" class="form-control" ></textarea>
   					</div><input type="submit" name="submit" class="btn btn-success form-control mt-3 mb-3">
   				</form>
   			</div>
   		</div>
   	</div>
   </div>
</body>
</html>>