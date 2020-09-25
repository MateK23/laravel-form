<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table,td,td,th{
			border:solid 1px black;
			padding: 5px;
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>#</th>
			<th>Surname</th>
			<th>#</th>
			<th>Address</th>
			<th>#</th>
			<th>Biography</th>
			<th>#</th>
			<th>Birthday</th>

		</tr>
		<tr>
			@foreach ($newdata as $data)
				<td>{{ ++$loop->index }}</td>
				<td>{{ $data }}</td>
			@endforeach
		</tr>
	</table>
</body>
</html>

{{-- სახელი
გვარი
მისამართი
ბიოგრაფია textarea
დაბადების თარიღი --}}