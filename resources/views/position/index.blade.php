<h1>Position List</h1>
<div>
	<a href="{{ url('/') }}/position/create"> New Position</a>
</div>
<table border=1>
<tr>
		<th>position_id</th>
		<th>name</th>
		<th>action</th>

		
	</tr>
	@foreach($table_position as $row)
	<tr>
		<td>{{ $row->position_id }} </td>
		<td>{{ $row->position_name }} </td>
		
		
		<td>
			<a href="{{ url('/') }}/position/{{ $row->position_id }}">View</a>
			<a href="{{ url('/') }}/position/{{ $row->position_id }}/edit">Edit</a>
			<a href="{{ url('/') }}/position/{{ $row->position_id }}/Delete">Delete</a>

		</td>
	</tr>
	@endforeach
</table>
