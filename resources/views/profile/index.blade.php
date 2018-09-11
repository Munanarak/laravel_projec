<!-- this file location is /resources/views/profile/index.blade.php  -->
<h1>All Profile</h1>
<table border="1">
	<tr>
		<th>id  </th>
		<th>name : </th>
		<th>lastname : </th>
	</tr>
	@foreach($table as $row)
	<tr>
		<td>{{ $row->id }}</td>
		<td>{{ $row->name }}</td>
		<td>{{ $row->lastname }}</td>
	</tr>
	@endforeach
</table>
