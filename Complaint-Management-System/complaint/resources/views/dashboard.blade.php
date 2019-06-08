<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css\app.css')}}">
	<title></title>
	<style type="text/css">
		.row
		{
			margin-top: 50px;
		}
	</style>
</head>
<body>
     @include('navbar')
     <div class="container">
     	<div class="row">
     		<div class="col-md-10 mx-auto">
     			<div class="card card-header bg-secondary">
     				<center><h3 class="text-light">Complaint Management System</h3></center>
     			</div>
     			<table class="table table-hover" border="1px">
     				<tr style="font-style: bold; " class="bg-dark text-light">
     					<th>Complaint Id</th>
     					<th>Subject</th>
     					<th>Description</th>
     					<th>Reply</th>
     					<th>Delete</th>
     				</tr>
     				@foreach($res as $row)
     				<tr>
     					<td>{{$row->random}}</td>
     					<td>{{$row->subject}}</td>
     					<td>{{$row->description}}</td>
     					<td><a href="reply/{{$row->random}}" class="btn btn-warning ">Reply</a></td>
     					<td><a href="delete/{{$row->random}}" class="btn btn-danger">Delete</a></td>
     				</tr>
     				@endforeach
     			</table>
     			{{ $res->links() }}
     		</div>
     	</div>
     </div>
</body>
</html>