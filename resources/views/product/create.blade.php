<h1>Create New Product</h1>
<form action="{{ url('/') }}/product" method="POST">
	{{ csrf_field() }}
	{{ method_field('POST') }}
	<div>
		<strong>product_id : </strong>
		<input type="number" number="product_id"  placeholder="product_id here..." >
	</div>
	<div>
		<strong>product_code : </strong>
		<input type="taxt" name="product_code"  placeholder="product_code here..." >
	</div>
	<div>
		<strong>product_name : </strong>
		<input type="taxt" name="product_name"  placeholder="product_name here..." >
	</div>
	<strong>product_price : </strong>
	    <input type="number" number="product_price"  placeholder="product_price here..." >
</div>
		<div>
		<strong>product_unit : </strong>
		<input type="taxt" name="product_unit"  placeholder="product_unit here..." >
	</div>
	
	
		
	<div>
		<a href="{{ url('/') }}/product">back</a>
		<button type="submit">Create</button>
	</div>
</form>
