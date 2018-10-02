<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentModel;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = StudentModel::select_all();
$data = [
"student" => $student
];
return view('student/index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $student = StudentModel::select_all();
     $data = [
        "student" => $student
     ];

        return view('student/create',$data);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $hours_per_week = $request->input('hour_per_week');
        $grade = $request->input('grade');
          

StudentModel::insert($name,$hours_per_week, $grade);
return redirect('/student');

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
$student = StudentModel::select_by_id($id);
$data = [
"student" => $student
];
return view('student/show',$data);
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
          $student = StudentModel::select_by_id($id);
        
$data = ['student' => $student,'student' => $student];


return view('student/edit',$data);
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
      
        $name = $request->input('name');
        $hours_per_week = $request->input('hour_per_week');
        $grade = $request->input('grade');
    
StudentModel::update_by_id($id,$name,$hours_per_week, $grade);
return redirect('/student');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         StudentModel::delete_by_id($id);
return redirect('/student');
    }
}
