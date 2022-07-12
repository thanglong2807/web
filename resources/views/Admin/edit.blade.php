<!DOCTYPE html>
<html lang="en">
<head>
   @include('Admin/Page/Header')
</head>
<body>
  @include('Admin/Page/formmaster')
    <form method="POST" action="{{route('admin.update')}}" enctype="multipart/form-data"> 
      @if ($errors->any())
          <div class="alert alert-danger">Dữ liệu nhập vào không hợp lệ</div>
      @else
          
      @endif
      <div class="mb-3">
        <label  class="form-label">Mã sản phẩm</label>
        <input type="text" class="form-control" name="id"  value="{{old('id') ?? $productDetail->id }}">
        @error('id')
        
        <span style="color: brown">{{$message}}</span>
        @enderror
      </div>
        <div class="mb-3">
          <label  class="form-label">Tên sản phẩm</label>
          <input type="text" class="form-control" name="tensp"  value="{{old('tensp') ?? $productDetail->tensp }}">
          @error('tensp')
          
          <span style="color: brown">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
            <label  class="form-label" >Giá sản phẩm</label>
            <input type="text" class="form-control" name="gia"  value="{{old('gia') ?? $productDetail->gia }}">
            @error('gia')
          
          <span style="color: brown">{{$message}}</span>
          @enderror
          </div>
          <div class="mb-3">
            <label  class="form-label" >Loại sản phẩm</label>
            <input type="text" class="form-control" name="loai_san_pham"  value="{{old('loai_san_pham') ?? $productDetail->loai_san_pham }}">
            @error('loai_san_pham')
          
          <span style="color: brown">{{$message}}</span>
          @enderror
          </div>
          <div class="mb-3">
            <label  class="form-label">Ảnh</label>
            <input type="file" class="form-control" name="anh"  value="{{old('anh') ?? $productDetail->anh }}">
            @error('anh')
          
            <span style="color: brown">{{$message}}</span>
            @enderror
          </div>
          <div class="mb-3">
            <label  class="form-label" >Mô tả ngắn</label>
            <input type="text" class="form-control" name="motangan"  value="{{old('motangan') ?? $productDetail->motangan }}">
            @error('motangan')
          
          <span style="color: brown">{{$message}}</span>
          @enderror
          </div>
          <div class="mb-3">
            <label  class="form-label" >Mô tả</label>
            <textarea type="text" class="form-control" name="mota"  value="{{old('mota') ?? $productDetail->mota }}"></textarea>
            @error('mota')
          
          <span style="color: brown">{{$message}}</span>
          @enderror
          </div>
          <div class="mb-3">
            <label  class="form-label">Số lượng</label>
            <input type="text" class="form-control" name="so_luong"  value="{{old('so_luong') ?? $productDetail->so_luong }}" >
            @error('so_luong')
          
            <span style="color: brown">{{$message}}</span>
            @enderror
          </div>
        
          <div class="mb-3">
            <label  class="form-label">ngày sửa</label>
            <input type="date" class="form-control" name="updated_at"  value="{{old('updated_at') ?? $productDetail->updated_at }}" >
            @error('updated_at')
          
            <span style="color: brown">{{$message}}</span>
            @enderror
          </div>
       
        <a class="btn btn-warning" href="{{route('admin.index')}}">Quay lại</a>
        <button type="submit" class="btn btn-primary">Update</button>
        @csrf
        @method('POST')
      </form>
      @include('Admin/Page/Footer')
</body>
</html>