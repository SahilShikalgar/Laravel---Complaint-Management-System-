<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	<table class="table">
		<tr>
			<th>Complaint ID</th>
			<th>Subject</th>
			<th>Description</th>
			<th>Date</th>
			<th>Reply</th>
		</tr>
		@foreach($records as $row)
		<tr>
			<td>{{ $row->random }}</td>
			<td>{{ $row->subject }}</td>
			<td>{{ $row->description }}</td>
			<td>{{ $row->date }}</td>
			<td>{{ $row->reply }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>