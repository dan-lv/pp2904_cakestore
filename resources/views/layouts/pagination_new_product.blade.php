@foreach($new_product as $new)
<div class="col-md-6 col-lg-3">
    <div class="product">
        <a href="{{route('productdetail', $new->id)}}" class="img-prod"><img class="img-fluid" src="source/image/product/{{$new->image}}" alt="Colorlib Template">
            @if($new->promotion_price != 0)
            <div class="ribbon-wrapper">
                <div class="ribbon sale">Sale</div>
            </div>
            @endif
            <div class="overlay"></div>
        </a>
        <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="#">{{$new->name}}</a></h3>
            <div class="d-flex">
                <div class="pricing">
                    <p class="price">
                        @if($new->promotion_price == 0)
                        <span class="mr-2 price-dc">{{number_format($new->unit_price)}} đ</span>
                        @else
                        <span class="mr-2 price-dc">{{number_format($new->unit_price)}} đ</span>
                        <span class="price-sale">{{number_format($new->promotion_price)}} đ</span>
                        @endif
                    </p>
                </div>
            </div>
            <div class="bottom-area d-flex px-3">
                <div class="m-auto d-flex">
                    <a href="{{route('productdetail', $new->id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                        <span><i class="ion-ios-menu"></i></span>
                    </a>
                    <a href="{{route('themgiohang', $new->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1" id="newProduct">
                        <span><i class="ion-ios-cart"></i></span>
                    </a>
                    <a href="{{route('addwishlist', $new->id)}}" class="heart d-flex justify-content-center align-items-center ">
                        <span><i class="ion-ios-heart"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="row" id="newProductPagination">{{$new_product->links()}}</div>
