<h1>Product List</h1>
<div>
	<a href="{{ url('/') }}/product/create"> New Product</a>
</div>
<table border=1>
<tr>
		<th>product_id</th>
		<th>product_code</th>
		<th>product_name</th>
		<th>product_price</th>
		<th>product_unit</th>
		<th>action</th>

		
	</tr>
	@foreach($table_product as $row)
	<tr>
		<td>{{ $row->product_id }} </td>
		<td>{{ $row->product_code }} </td>
		<td>{{ $row->product_name }} </td>
		<td>{{ $row->product_price }} </td>
		<td>{{ $row->product_unit }} </td>
		
		
		<td>
			<a href="{{ url('/') }}/product/{{ $row->product_id }}">View</a>
			<a href="{{ url('/') }}/product/{{ $row->product_id }}/edit">Edit</a>
			<a href="javascript:void(0)" onclick="onDelete( {{ $row->product_id }} )">
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
		form.action = "{{ url('/') }}/product/"+id;

		//SUBMIT
		var want_to_delete = confirm('Are you sure to delete this product?');
		if(want_to_delete){
			form.submit();
		}
	}
	</script>
</div>
