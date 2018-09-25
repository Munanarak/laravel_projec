<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PositionModel;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_position = PositionModel::select_all();
$data = [
"table_position" => $table_position
];
return view('position/index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('position/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $position_name = $request->input('position_name');
PositionModel::insert( $position_name);
return redirect('/position');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response

     */
    public function show($id)
    {
        {
$table_position = PositionModel::select_by_id($id);
$data = [
"table_position" => $table_position
];
return view('position/show',$data);
}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $table_position = PositionModel::select_by_id($id);
$data = [
'table_position' => $table_position
];
return view('position/edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
$position_name = $request->input('position_name');
    
PositionModel::update_by_id( $position_name,$id);
return redirect('/position');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        PositionModel::delete_by_id($id);
return redirect('/position');

    }
}
