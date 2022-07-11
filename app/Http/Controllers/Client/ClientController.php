<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductModel;
class ClientController extends Controller
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();

    }
    public function index(){
        $title ="Trang chủ";
       
       $productData = $this->productModel->showAllProduct();
        return view('Client/Home',compact('title','productData'));
    }
    public function chitietsp($id){
        $title ="Trang chủ";
        
        $productData = $this->productModel-> getProduct($id);
        $productData = $productData[0];
        return view('Client.chitietsp',compact('title','productData'));
    }
}
