@extends('master') 
@section('title', 'Sản phẩm') 
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('source/image/slide/banner2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="index.html">Product</a></span> </p>
                <h1 class="mb-0 bread">Chi tiết sản phẩm</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="images/product-1.jpg" class="image-popup"><img src="source/image/product/{{$sanpham->image}}" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3>{{$sanpham->name}}</h3>
                <div class="rating d-flex">
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2">5.0</a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                        <a href="#"><span class="ion-ios-star-outline"></span></a>
                    </p>
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2" style="color: #000;">100 <span style="color: #bbb;">Rating</span></a>
                    </p>
                    <p class="text-left">
                        <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                    </p>
                </div>
                <p class="price">
                    @if($sanpham->promotion_price == 0)
                        <span class="mr-2 price-dc">{{number_format($sanpham->unit_price)}} đ</span>
                    @else
                        <span class="price-sale">{{number_format($sanpham->promotion_price)}} đ</span>
                    @endif

                </p>
                <p>{{$sanpham->description}}
                </p>
                <div class="row mt-4">
                    <div class="col-md-6">
                    <div class="input-group col-md-6 d-flex mb-3">
                        <span class="input-group-btn" style="margin-right: 46px;">
                        <button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                       <i class="ion-ios-remove"></i>
                        </button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100" form="form-add-cart">
                        <span class="input-group-btn ml-2">
                        <button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                         <i class="ion-ios-add"></i>
                     </button>
                    </span>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <p style="color: #000;">600 kg available</p>
                    </div>
                </div>
                <p><a href="{{route('themnhieusanpham', $sanpham->id)}}" class="btn btn-black py-3 px-5" id="add-cart">Add to Cart</a></p>
            </div>
        </div>
    </div>
<form id="form-add-cart" action="{{ route('themnhieusanpham', $sanpham->id) }}" method="POST" style="display: none;">
    @csrf
</form>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Products</span>
                <h2 class="mb-4">Related Products</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($sp_tuongtu as $sptt)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="source/image/product/{{$sptt->image}}" alt="Colorlib Template">
                        @if($sptt->promotion_price != 0)
                        <div class="ribbon-wrapper">
                            <div class="ribbon sale">Sale</div>
                        </div>
                        @endif
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{$sptt->name}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price">
                                    @if($sptt->promotion_price == 0)
                                    <span class="mr-2 price-dc">{{number_format($sptt->unit_price)}} đ</span>
                                    @else
                                    <span class="mr-2 price-dc">{{number_format($sptt->unit_price)}} đ</span>
                                    <span class="price-sale">{{number_format($sptt->promotion_price)}} đ</span>
                                    @endif</p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="{{route('productdetail', $sptt->id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="{{route('themgiohang', $sptt->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row">{{$sp_tuongtu->links()}}</div> 
    </div>
</section>
@endsection

@section('script')
<script>
    $(document).ready(function() {

        var quantitiy = 0;
        $('.quantity-right-plus').click(function(e) {

            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            $('#quantity').val(quantity + 1);

            // Increment

        });

        $('.quantity-left-minus').click(function(e) {
            // Stop acting like a button
            e.preventDefault();
            // Get the field name
            var quantity = parseInt($('#quantity').val());

            // If is not undefined

            // Increment
            if (quantity > 0) {
                $('#quantity').val(quantity - 1);
            }
        });

        $(document).on('click', '#add-cart', function(event){
            event.preventDefault();
            var quantity = $("input#quantity").val();
            var page = $(this).attr('href');
            ajax_form(page, quantity);
            count_cart();
        });

        function ajax_form(page, quantity) 
        {
            $.ajax({
                url: page+'/'+quantity,
                success:function(data) 
                {
                    $('#ajax_cart').html(data);
                },
            })
        } 

        function count_cart() 
        {
            $.ajax({
                url:"/count_cart",
                success:function(data) 
                {
                    $('#count_cart').html(data);
                },
            })
        }  
    });
</script>

@endsection
