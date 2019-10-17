@extends('master')
@section('title', 'Liên hệ')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('source/image/slide/banner2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact us</span></p>
                <h1 class="mb-0 bread">Contact us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section bg-light">
    <div class="container">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            <strong>Well done!</strong> {{ session('status') }}
        </div>
        @endif
        <div class="row d-flex mb-5 contact-info">
            <div class="w-100"></div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="info bg-white p-4">
                    <p><span>Website</span> <a href="#">yoursite.com</a></p>
                </div>
            </div>
        </div>
        <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
                <form action="{{ route('user_feedbacks.store') }}" class="bg-white p-5 contact-form" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name" name="name" style="width: 100%;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email" name="email" style="width: 100%;">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" name="subject" style="width: 100%;">
                    </div>
                    <div class="form-group">
                        <textarea cols="30" rows="7" class="form-control" name="message" placeholder="Message" style="width: 100%;"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5" style="width: 100%;">
                    </div>
                </form>
                
            </div>

            <div class="col-md-6 d-flex">
                <div id="map" class="bg-white"></div>
            </div>
        </div>
    </div>
</section>
@endsection
