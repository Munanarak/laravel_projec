@forelse($table_product as $row)
	<h1>product : {{ $row->product_id }} </h1>
	<div>
		<strong>product_id : </strong>
		<span>{{ $row->product_id }} </span>
	</div>
	</div>
	
		<strong>product_code : </strong>
		<span>{{ $row->product_code }}</span>
	</div>
	<div>

		<strong>product_name : </strong>
		<span>{{ $row->product_name }} </span>
	</div>
	<div>
	
		<strong>product_price : </strong>
		<span>{{ $row->product_price }}</span>
	</div>
	<div>
	
		<strong>product_unit : </strong>
		<span>{{ $row->product_unit }}</span>
	</div>

	
	<div><a href="{{ url('/') }}/product">back to product</a></div>
@empty
	<div>This product "id" does not exist</div>
@endforelse
 