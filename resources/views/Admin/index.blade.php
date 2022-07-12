<!DOCTYPE html>
<html lang="en">
<head>
   @include('Admin/Page/Header')
</head>
<body>
  @include('Admin/Page/formmaster')
  

    {{-- @section('content')
      @if (section('msg'))
            <div class="alert alert-success" >{{section('msg')}}</div>
      @endif --}}
      {{-- <h1>{{$title}}</h1> --}}
    {{-- @endsection --}}
    @if ($errors->any())
    <div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ</div>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Mã sản phẩm</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Giá</th>
 
            <th scope="col">Mô tả ngắn</th>
            <th scope="col">Mô tả</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Loại sản phẩm</th>
            <th scope="col">Ngày nhập</th>
            <th scope="col">Ngày sửa</th>
         
            <th scope="col">Tác vụ</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($productData as $row)
          <tr>
            <th scope="row">{{$row->id}}</th>
            <td scope="col">{{$row->tensp}}</td>
            <td scope="col">{{$row->so_luong}}</td>
            <td scope="col">{{$row->gia}}</td>
            <td scope="col">{{$row->motangan}}</td>
            <td scope="col">{{$row->mota}}</td>
            <td scope="col">
                <img style="width:50px" src="/upload/{{$row->anh}}" alt="">
            </td>
            <td scope="col">{{$row->loai_san_pham}}</td>
            <td scope="col">{{$row->created_at}}</td>
            <td scope="col">{{$row->updated_at}}</td>
            
            <td scope="col">
                <a style="margin:3px" class="btn btn-danger" href="{{route('admin.edit',['id'=>$row->id])}}">sửa</a>
                <a  style="margin:3px" class="btn btn-danger" onclick="return confirm('bạn có chắc muốn xóa không ?')" href="{{route('admin.destroy',['id'=>$row->id])}}">xóa</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table> 
      
      @include('Admin/Page/Footer')
</body>
</html>