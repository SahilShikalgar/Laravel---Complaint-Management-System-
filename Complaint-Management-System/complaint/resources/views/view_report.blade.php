<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<title></title>
</head>
<body>
	@include('navbar')
 	<div class="container">
 		<div class="row mt-5">
 			<div class="col-md-10 mx-auto">
 			
 				<div class="card card-header bg-secondary">
     				<center><h3 class="text-light">Complaint Management System</h3></center>
     			</div>
     			<table class="table table-hover" border="1px">
     				<tr style="font-style: bold; " class="bg-dark text-light">
     					<th>Complaint Id</th>
     					<th>Date</th>
     					<th>Subject</th>
     					<th>Description</th>
     					<th>Reply</th>
     				</tr>
     				@foreach($records as $row)
     				<tr>
     					<td>{{$row->random}}</td>
     					<td>{{$row->date}}</td>
     					<td>{{$row->subject}}</td>
     					<td>{{$row->description}}</td>
     					<td>{{$row->reply}}</td>
     				</tr>
     				@endforeach
     			</table>
 				{{ $records->links() }}
 			</div>
 		</div> 
 	</div>
</body>
</html>

<!--	<div class="card card-header bg-secondary">
 					<h3 class="text-white">Complaint Report</h3>
 				</div>
 				<table class="table table-hover" border="1px">
 					<tr class="bg-dark text-white">
 						<th>Complaint ID</th>
 						<th>Date</th>
 						<th>Subject</th>
 						<th>Description</th>
 						<th>Reply</th>
 					</tr>
 					@foreach($records as $record)
 					<tr>
 						<th>{{$record->random}}</th>
 						<th>{{$record->date}}</th>
 						<th>{{$record->subject}}</th>
 						<th>{{$record->description}}</th>
 						<th>{{$record->reply}}</th>
 					</tr>
 					@endforeach
 				</table>-->