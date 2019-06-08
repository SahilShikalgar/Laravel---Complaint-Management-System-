<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-5 mx-auto">
				<div class="card card-header">
					<h3>Show ID</h3>
					<label class="text-danger">Note the Reference number of your complaint for future use</label>
				</div>
				<div class="card card-body">
					@foreach($record as $row)
						<div class="form-group">
							<label>Reference Number:</label>
							<input type="text" name="Reference" value="{{$row->random}}" readonly="" class="form-control">
						</div>
						<div class="form-group">
							<label>Date:</label>
							<input type="date" name="date" readonly="" value="{{$row->date}}" class="form-control">
						</div>
						<div class="form-group">
							<label>Subject:</label>
							<input type="text" name="" readonly="" value="{{$row->subject}}" class="form-control">
						</div>
						<div class="form-group">	
							<label>Description:</label>
							<textarea rows="8" readonly="" class="form-control">{{$row->description}}</textarea>
						</div>
						<a href="{{url('login')}}" style="display: inline;">Go to login</a>
						<a href="{{url('view_reply')}}" style="display: inline;">View Reply</a>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</body>
</html>