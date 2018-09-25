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
			<a href="javascript:void(0)" onclick="onDelete( {{ $row->position_id }} )">
Delete
</a>

			

		</td>
	</tr>
	@endforeach
</table>
<div style="display:none;">
	<form action="#" method="POST" id="form_delete" >
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>
	<script>
	function onDelete(id){
		//--THIS FUNCTION IS USED FOR SUBMIT FORM BY script--//

		//GET FORM BY ID
		var form = document.getElementById("form_delete");

		//CHANGE ACTION TO SPECIFY ID
		form.action = "{{ url('/') }}/position/"+id;

		//SUBMIT
		var want_to_delete = confirm('Are you sure to delete this position?');
		if(want_to_delete){
			form.submit();
		}
	}
	</script>
</div>


