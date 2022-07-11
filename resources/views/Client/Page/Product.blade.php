<div class="product_main">
  <div class="product">
    <h1>Sản phẩm</h1>
    <div class="product-container">
      
        @foreach ($productData as $item)
            
       
      <div class="product-container-flex">
        <div  class="product-card card" style="width: 16rem;">
        <a style="text-decoration: none;" href="{{route('chitietsp',['id'=>$item->id])}}">
            <img  src="data:image/jpeg;base64,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" class="card-img-top" alt="...">
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