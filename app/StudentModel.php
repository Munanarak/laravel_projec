<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class StudentModel extends Model
{
    public static function select_all(){
$sql = "SELECT * FROM student";
return DB::select($sql , []);
}    

public static function select_by_id($id){
$sql = "SELECT * FROM student WHERE student_id = {$id}";
return DB::select($sql , []);
}
public static function insert($name,$hour_per_week,$grade){
$sql = "INSERT INTO student (name,hour_per_week,grade)
VALUES ('{$name}',{$hour_per_week},'{$grade}')";
DB::insert($sql, []); //NO NEED TO RETURN
}
public static function update_by_id($id,$name,$hour_per_week,$grade){
$sql = "UPDATE student SET
name = '{$name}',
hour_per_week = {$hour_per_week},
grade ='{$grade}'

WHERE student_id= {$id}";
DB::update($sql, []);
}
public static function delete_by_id($id){
$sql = "DELETE FROM student WHERE student_id = {$id}";
DB::delete($sql, []);
}

}
