@forelse($table_product as $row)
<h1>Edit Product : {{ $row->product_id }}</h1>
	<form action="{{ url('/') }}/product/{{ $row->product_id }}" method="POST">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
    	<div>
    		<strong>product_code : </strong>
    		<input type="text" name="product_code" value="{{ $row->product_code }}" placeholder="product_code here..." >
    	</div>
    	<div>
    		<strong>product_name : </strong>
    		<input type="text" name="product_name" value="{{ $row->product_name }}" placeholder="product_name here..." >
    	</div>
    	<div>
    		<strong>product_price : </strong>
    		<input type="number" name="product_price" value="{{ $row->product_price }}" placeholder="product_price here..." >
    	</div>
    	<div>
    		<strong>product_unit : </strong>
    		<input type="text" name="product_unit" value="{{ $row->product_unit }}" placeholder="product_unit here..." >
    	</div>
    	
			<a href="{{ url('/') }}/product">back</a>
			<button type="submit">Update</button>
		</div>
	</form>
@empty
	<h1>This product name does not exist</h1>
@endforelse
