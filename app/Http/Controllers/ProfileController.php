<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
    public function create( )
    {

        return view('profile/create');
    }
    public function index()
    {
	  
  	$table = DB::select('select * from profile', []);

    	$data = [
		'table' => $table
	];
        return view('profile/index' , $data);
    }

}


