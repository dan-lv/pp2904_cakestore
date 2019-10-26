@extends('master')
@section('title', 'Sản phẩm')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('source/image/slide/banner2.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div>
<section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10 mb-5 text-center">
    				<ul class="product-category">
    					<li><a href="{{route('producttype', 0)}}" class="active">All</a></li>
    					@foreach($loai as $l)
    					<li><a href="{{route('producttype', $l->id)}}">{{$l->name}}</a></li>
    					@endforeach
    				</ul>
    			</div>
    		</div>
    		<div class="row">
                @foreach($data as $sp)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="product">
                            <a href="{{route('productdetail', $sp->id)}}" class="img-prod"><img class="img-fluid" src="source/image/product/{{$sp->image}}" alt="Colorlib Template">
                                @if($sp->promotion_price != 0)
                                <div class="ribbon-wrapper">
                                    <div class="ribbon sale">Sale</div>
                                </div>
                                @endif
                                <div class="overlay"></div>
                            </a>
                            <div class="text py-3 pb-4 px-3 text-center">
                                <h3><a href="#">{{$sp->name}}</a></h3>
                                <div class="d-flex">
                                    <div class="pricing">
                                        <p class="price">
                                            @if($sp->promotion_price == 0)
                                            <span class="mr-2 price-dc">{{number_format($sp->unit_price)}} đ</span>
                                            @else
                                            <span class="mr-2 price-dc">{{number_format($sp->unit_price)}} đ</span>
                                            <span class="price-sale">{{number_format($sp->promotion_price)}} đ</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                                <div class="bottom-area d-flex px-3">
                                    <div class="m-auto d-flex">
                                        <a href="{{route('productdetail', $sp->id)}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                            <span><i class="ion-ios-menu"></i></span>
                                        </a>
                                        <a href="{{route('themgiohang', $sp->id)}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                            <span><i class="ion-ios-cart"></i></span>
                                        </a>
                                        <a href="{{route('addwishlist', $sp->id)}}" class="heart d-flex justify-content-center align-items-center ">
                                            <span><i class="ion-ios-heart"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
    		</div>
    	</div>
    </section>
@endsection
