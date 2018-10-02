<h1>Create New student</h1>
<form action="{{ url('/') }}/student" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div>
		<strong>name : </strong>
		<input type="taxt" name="name"  placeholder="name here..."  >
	</div>	
	<div>
		<strong>hour/week : </strong>
	    <input type="taxt" name="hour_per_week"  placeholder="hour/week here..." >
</div>
		<div>
		<strong>grade : </strong>
		<input type="taxt" name="grade"  placeholder="grade here..." >
	</div>
	
		
	<div>
		<a href="{{ url('/') }}/student">back</a>
		<button type="submit">Create</button>
	</div>
</form>