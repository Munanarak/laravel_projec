<?php

namespace App;

use Illuminate\Support\Facades\DB;


class CustomerModel //extends Model
{
    function select(){
$sql = "SELECT * FROM customer";
		return DB::select($sql, []);
	}

}
