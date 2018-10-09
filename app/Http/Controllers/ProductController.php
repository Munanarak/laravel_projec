<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $table_product = ProductModel::select_all();
$data = [
"table_product" => $table_product
];
return view('product/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $table_product = ProductModel::select_all();
     $data = [
        "table_product" => $table_product
     ];
    
        return view('product/create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $product_id = $request->input('product_id');
           $product_code = $request->input('product_code');
           $product_name = $request->input('product_name');
           $product_price = $request->input('product_price');
           $product_unit = $request->input('product_unit');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        $table_product = ProductModel::select_by_id($product_id);
$data = [
"table_product" => $table_product
];
return view('product/show',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product_id)
    {
            $table_product = ProductModel::select_by_id($product_id);

    $data = ['table_product' => $table_product,'table_product' => $table_product];
    

    return view('product/edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
          //$product_id = $request->input('product_id');
          $product_code = $request->input('product_code');
          $product_name = $request->input('product_name');
          $product_price = $request->input('product_price');
          $product_unit = $request->input('product_unit');
    
ProductModel::update_by_id($product_id,$product_code,$product_name,$product_price,$product_unit);
return redirect('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        ProductModel::delete_by_id($product_id);
return redirect('/product');

    }
}
