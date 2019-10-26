@extends('master')
@section('title', 'Sản phẩm đã thích')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('source/image/slide/banner2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span class="mr-2"><a href="index.html">Checkout</a></span>
                <h1 class="mb-0 bread">Checkout</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart" style="padding-top: 50px;">
    @if(Session::has('status'))
    <div class="alert alert-success">
        {{Session::get('status')}}
    </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>Product List</th>
                                <th>Product ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productlist as $productlists)
                            <tr class="text-center">

                                <td class="image-prod">
                                    <a href="{{ route('productdetail', $productlists->id) }}">
                                        <div class="img" style="background-image:url(source/image/product/{{$productlists->image}});"></div>
                                    </a>
                                </td>

                                <td class="price">{{$productlists->id}}</td>

                                <td class="product-name">
                                    <a href="{{ route('productdetail', $productlists->id) }}">
                                        <h3>{{$productlists->name}}</h3>
                                    </a>
                                </td>

                                <td class="total">{{$productlists->unit_price}}</td>
                                <td class="product-remove"><a href="{{ route('deletewishlist', $productlists->id)}}"><span class="ion-ios-close"></span></a></td>
                            </tr>
                            @endforeach
                            <!-- END TR-->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
