<h1>Create New Position</h1>
<form action="{{ url('/') }}/position" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div>
		<strong>Position_name : </strong>
		<input type="taxt" name="position_name"  placeholder="Position_name here..." >
	</div>
	
		
	<div>
		<a href="{{ url('/') }}/position">back</a>
		<button type="submit">Create</button>
	</div>
</form>
