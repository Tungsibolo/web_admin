<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Rules\Uppercase;
use Illuminate\Support\Facades\DB;

use App\Models\Product;


class ProductController extends Controller
{
    //Admin
        //Xem danh sách
        public function productList(){

            $product = new Product();
            $product = $product->getAllProduct();
    
            return view('admin.productlist', ['product' => $product]);
        }
    
            //Màn hình thêm sản phẩm
        public function productDetailAdd(){
            $title = "Thêm sản phẩm";
            return view('admin.productdetailadd', ['title' => $title]);
        }
            //Thêm sản phẩm
        public function addProduct(){
    
            
            $dataInsert =[
                $request->ten,
                $request->email,
                date('Y-m-d H:i:s'),
            ];
    
            $user = new Products();
            $user -> addProduct($dataInsert);
    
            return redirect()->route('products.list')->with('msg','Thêm sản phẩm thành công');
        }
            //Sửa sản phẩm
        public function productDetailEdit(Request $request,$id){
            $title = "Sửa sản phẩm";
            if(!empty($id)){
                $product = new Products();
                $productDetail = $user->getProduct($id);
                if(!empty($productDetail[0])){
                    $request->session()->put('id',$id);
                    $productDetail = $userDetail[0];
                }else{
                    return redirect()->route('products.list')->with('msg','Sản phẩm không tồn tại');
                }
            }else{
                return redirect()->route('products.list')->with('msg','Sản phẩm dùng không tồn tại');
            }
    
            return view('admin.productdetailedit',compact('title','productDetail'));
        }
}
