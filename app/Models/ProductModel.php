<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class ProductModel extends Model
{
    use HasFactory;
    public function showAllProduct(){
        return   DB::select('SELECT * FROM san_pham ');
       
    }
    public function insertProduct($data){
        DB::insert("INSERT INTO san_pham( tensp, so_luong, gia, anh,motangan,mota, loai_san_pham, created_at) VALUES
        ( ? , ? , ? , ? , ?, ? , ? , ?  )", $data);
    }
    public function getProduct($id){
        $array[] =$id;
        return   DB::select('SELECT * FROM san_pham WHERE id = ?',$array);
       
    }
    public function updateProduct($data,$id){
       $data[] = $id;
        return   DB::update('UPDATE `san_pham` SET `id`= ?,`tensp`= ?,`so_luong`= ?,`gia`= ?,`anh`= ?,`motangan`= ? ,`mota`= ? ,`loai_san_pham`= ?,`updated_at`= ? WHERE id = ?',$data);
       
    }
    public function deleteProduct($id)
    {
        $array[] =$id;
        return DB::delete('DELETE FROM `san_pham` WHERE id = ?', $array);
    }
    
}
