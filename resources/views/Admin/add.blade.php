<!DOCTYPE html>
<html lang="en">
<head>
   @include('Admin/Page/Header')
</head>
<body>
    @include('Admin/Page/formmaster')
    @include('Admin/loaisp')
    <form method="POST" action="/admin/add/store">
      @csrf
      @method('POST')
        <div class="mb-3 pd ">
          <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
          <input type="text" class="form-control" name="name"  value="{{old('name')}}">
          
        </div>
        <div class="mb-3 pd">
          <label for="exampleInputEmail1" class="form-label">Số lượng</label>
          <input type="text" class="form-control" name="so_luong"  value="{{old('so_luong')}}">
          
        </div>
        <div class="mb-3 pd">
            <label for="exampleInputEmail1" class="form-label" >Giá sản phẩm</label>
            <input type="text" class="form-control" name="gia"  value="{{old('gia')}}">
      
          </div>

          <div class="mb-3 pd">
            <label for="exampleInputEmail1" class="form-label">Ảnh</label>
            <input type="file" class="form-control" name="anh"  value="{{old('anh')}}">
          </div>

          <div class="mb-3 pd">
            <label for="exampleInputEmail1" class="form-label" >Mô tả ngắn</label>
            <input type="text" class="form-control" name="motangan"  value="{{old('motangan')}}">
      
          </div>
          <div class="mb-3 pd">
            <label for="exampleInputEmail1" class="form-label" >Mô tả</label>
            <textarea type="text" class="form-control" name="mota"  value="{{old('mota')}}"></textarea>
          </div>
          <div class="mb-3 pd">
            <label for="exampleInputEmail1" class="form-label">Loại sản phẩm</label>
            <input type="text" class="form-control" name="loai_san_pham"  value="{{old('loai_san_pham')}}" >
          </div>
          <div class="mb-3 pd">
            <label for="exampleInputEmail1" class="form-label">Ngày nhập</label>
            <input type="date" class="form-control" name="created_at"  value="{{old('created_at')}}" >
          </div>
          
       
        <a class="btn btn-warning mgl" href="{{route('admin.index')}}">Quay lại</a>
        <button type="submit" name="submit" class="btn btn-primary mgl">Submit</button>
       
      </form>
      @include('Admin/Page/Footer')
</body>
</html>