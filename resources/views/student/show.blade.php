@forelse($student as $row)
	<h1>Student : {{ $row->student_id }} </h1>
	<div>
		<strong>name : </strong>
		<span>{{ $row->name }} </span>
	</div>
	<div><strong>hours_per_week : </strong>
		<span>{{ $row->hour_per_week}}</span>
	</div>
		<div> 
		<strong>grade : </strong>
		<span>{{ $row->grade }}</span>
	</div>
	<div><a href="{{ url('/') }}/student">back to student</a></div>
@empty
	<div>This student "id" does not exist</div>
@endforelse