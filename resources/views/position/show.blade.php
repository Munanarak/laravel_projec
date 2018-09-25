@forelse($table_position as $row)
	<h1>position : {{ $row->position_id }} </h1>
	<div>
		<strong>position_name : </strong>
		<span>{{ $row->position_name }} </span>
	</div>
	
		<strong>position_id : </strong>
		<span>{{ $row->position_id }}</span>
	</div>
	<div><a href="{{ url('/') }}/position">back to position</a></div>
@empty
	<div>This Position "id" does not exist</div>
@endforelse
 
