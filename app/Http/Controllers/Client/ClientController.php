<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::user()){
            $user = Auth::user()->name;
             return view('Client/Home',compact('title','productData','user'));

        }else{
            $user = null;
            return view('Client.Home',compact('title','productData','user'));
        }
    }


    public function chitietsp($id){
        $title ="Trang chủ";
       
        $user = Auth::user()->name;
        if ($user) {
            
            $productData = $this->productModel-> getProduct($id);
            $productData = $productData[0];
            return view('Client.chitietsp',compact('title','productData','user'));
        }else{
            $user = null;
            return view('Client.chitietsp',compact('title','productData','user'));
        }
    }
    /**
 * Log the user out of the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}
