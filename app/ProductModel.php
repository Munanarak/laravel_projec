<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ProductModel extends Model
{
      public static function select_all(){
$sql = "SELECT * FROM tb_product";
return DB::select($sql , []);
}    

public static function select_by_id($product_id){
$sql = "SELECT * FROM tb_product WHERE product_id = {$product_id}";
return DB::select($sql , []);
}
public static function insert($product_id,$product_code,$product_name,$product_price,$product_unit){
$sql = "INSERT INTO tb_product (product_id,product_code,product_name,product_price,product_unit)
VALUES ({$product_id},'{$product_code}','{$product_name}',{$product_price},'{product_unit}')";
DB::insert($sql, []); //NO NEED TO RETURN
}
public static function update_by_id($product_id,$product_code,$product_name,$product_price,$product_unit){
$sql = "UPDATE tb_product SET

product_code ='{$product_code}',
product_name ='{$product_name}',
product_price = {$product_price},
product_unit ='{$product_unit}'

WHERE product_id= {$product_id}";
DB::update($sql, []);
}
public static function delete_by_id($product_id){
$sql = "DELETE FROM tb_product WHERE product_id = {$product_id}";
DB::delete($sql, []);
}

}
