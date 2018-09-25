<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\PositionModel;


class PositionModel extends Model
{
    public static function select_all(){
$sql = "SELECT * FROM tb_position";
return DB::select($sql , []);
}    

public static function select_by_id($id){
$sql = "SELECT * FROM tb_position WHERE position_id = {$id}";
return DB::select($sql , []);
}
public static function insert($position_name){
$sql = "INSERT INTO tb_position (position_name)
VALUES ('{$position_name}')";
DB::insert($sql, []); //NO NEED TO RETURN
}
public static function update_by_id($position_name,$position_id){
$sql = "UPDATE tb_position SET
position_name = '{$position_name}'
WHERE position_id= {$position_id}";
DB::update($sql, []);
}
public static function delete_by_id($id){
$sql = "DELETE FROM tb_position WHERE position_id = {$id}";
DB::delete($sql, []);
}



}
