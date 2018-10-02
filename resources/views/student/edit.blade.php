@forelse($student as $row)
<h1>Edit student : {{ $row->student_id }}</h1>
	<form action="{{ url('/') }}/student/{{ $row->student_id }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
    	<div>
    		<strong>Name : </strong>
    		<input type="text" name="name" value="{{ $row->name }}" placeholder="name here..." >
    		<div><strong>Hours per week : </strong>
    		<input type="text" name="hour_per_week" value="{{ $row->hour_per_week }}" placeholder="hour per week here..." >
    	</div>
    		<div>
    		<strong>grade : </strong>
    		<input type="text" name="grade" value="{{ $row->grade }}" placeholder="grade here..." >
    	</div>
    	
			<a href="{{ url('/') }}/student">back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty
	<h1>This Student name does not exist</h1>
@endforelse
