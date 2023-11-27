<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{
    use HasFactory;

    public function getAllProduct(){
        $product = DB::select("SELECT * FROM product");
        return $product;
    }

    public function addProduct($data){
        DB::insert('insert into users (ten, email, ngay) VALUES (?,?,?)',$data);
    }
}
