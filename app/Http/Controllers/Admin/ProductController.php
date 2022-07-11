<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductController extends Controller
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();

    }
    public function index()
    {
        $title = "Trang admin";
       
        $productData = $this->productModel->showAllProduct();
        return view('Admin/index',compact('title','productData'));
    }
    public function create()
    {   
        $title = 'Trang thêm sản phẩm';
        return view('Admin/add',compact('title',));
    }

    public function store(Request $request)
    {
        
         $request->validate([
            'name'=>'required',
            'so_luong' =>'required',
            'gia' =>'required',
            'anh' =>'required',
            'motangan'=>'required',
            'mota'=>'required',
            'loai_san_pham' =>'required',
            'created_at' =>'required',
        ],[
            'name.required'=>"Không được bỏ trống phần này",
            'so_luong.required'=>"Không được bỏ trống phần này",
            'gia.required'=>"Không được bỏ trống phần này",
            'anh.required'=>"Không được bỏ trống phần này",
            'motangan.required'=>"Không được bỏ trống phần này",
            'mota.required'=>"Không được bỏ trống phần này",
            'loai_san_pham.required'=>"Không được bỏ trống phần này",
            'created_at.required'=>"Không được bỏ trống phần này",
        ]);
        $dataProduct=[
            $request->name,
            $request->so_luong,
            $request->gia,
            $request->anh,
            $request->motangan,
            $request->mota,
            $request->loai_san_pham,
            $request->created_at,
        ];
         
        // dd($dataProduct);
        $this->productModel->insertProduct($dataProduct);
      
        return back();
    }
    public function edit(Request $request ,$id)
    {   
        if (!empty( $id)) {
            $productDetail = $this->productModel->getProduct($id);
            if (!empty( $productDetail[0])) {
                $request->session()->put('id',$id);
                $productDetail =  $productDetail[0];
            }else{
                return redirect()->route('admin.index')->with('msg','Sản phẩm không tồn tại');
            }
        }else{
            return redirect()->route('admin.index')->with('msg','Sản phẩm không tồn tại');
        }

        $title="Trang sửa sản phẩm ";
        return view('Admin.edit',compact('title','productDetail'));
    }
    public function update(Request $request)
    {
        $id = session('id');
        $request->validate([
            'tensp'=>'required',
            'so_luong' =>'required',
            'gia' =>'required',
            'anh' =>'required',
            'motangan'=>'required',
            'mota'=>'required',
            'loai_san_pham' =>'required',
            'updated_at' =>'required',
        ],[
            'tensp.required'=>"Không được bỏ trống phần này",
            'so_luong.required'=>"Không được bỏ trống phần này",
            'gia.required'=>"Không được bỏ trống phần này",
            'anh.required'=>"Không được bỏ trống phần này",
            'loai_san_pham.required'=>"Không được bỏ trống phần này",
            'updated_at.required'=>"Không được bỏ trống phần này",
        ]);
        $dataProduct=[
            $request->id,
            $request->tensp,
            $request->so_luong,
            $request->gia,
            $request->anh,
            $request->motangan,
            $request->mota,
            $request->loai_san_pham,
            $request->updated_at,
        ];
        
         $this->productModel->updateProduct($dataProduct,$id);
         return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        
        $this->productModel->deleteProduct($id);
        return back();
    }
}
