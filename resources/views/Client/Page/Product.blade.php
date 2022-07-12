<div class="product_main">
  <div class="product">
    <h1>Sản phẩm</h1>
    <div class="product-container">
      
        @foreach ($productData as $item)
            
       
      <div class="product-container-flex">
        <div  class="product-card card" style="width: 16rem;">
        <a style="text-decoration: none;" href="{{route('chitietsp',['id'=>$item->id])}}">
            <img style="height: 250px;width:100%" src="/upload/{{$item->anh}}" alt="...">
          <div class="card-body">
            <h5 style="color: black ;font-size:14px;font-weight:700" class="card-title">{{$item->tensp}}</h5>
            <span style="color: black;font-size:12px" class="card-title">{{$item->motangan}}</span>
            <div class="product-price">
              <span style="color: brown;font-weight: 700">Giá : {{$item->gia}}</span>
              <a href="{{route('chitietsp',['id'=>$item->id])}}" class="btn btn-danger">Mua</a>
            </div>
          </div>
        </div>
        </a>
      </div>
      @endforeach 
      
    </div>
  </div>
</div>