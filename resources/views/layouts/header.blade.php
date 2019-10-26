<div class="py-1 bg-primary">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                        <span class="text">039.994.1782</span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                        <span class="text">nhudanmkt@gmail.com</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                        <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Cake Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product Type</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        @foreach($loai_sp as $loai)
                        <a class="dropdown-item" href="{{route('producttype', $loai->id)}}">{{$loai->name}}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item"><a href="/about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('user_feedbacks.index') }}" class="nav-link">Contact</a></li>
                @if (Auth::check())
                <li class="nav-item dropdown">
                    <a href="/login" class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="m-menu__link-icon flaticon-avatar"></i>
                        Chao [ {{ Auth::user()->name }} ]
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="/lich-su">
                        <i class="m-menu__link-icon flaticon-list-3"></i> Track My Bill
                    </a>
                        <a class="dropdown-item" href="/wishlist">
                        <i class="m-menu__link-icon flaticon-list-3"></i> Wish List
                    </a>

                        <a class="dropdown-item" href="#"
                        onclick="event.preventDefault();
                        document.getElementById('logout').submit();">
                        <i class="m-menu__link-icon flaticon flaticon-logout"></i> Logout
                    </a>

                    
                    @if (Auth::user()->name == 'Admin')
                    <a class="dropdown-item" href="{{ route('admin') }}">
                        <i class="m-menu__link-icon flaticon-list-3"></i> Manage
                    </a>
                    @endif
                </div>
            </li>
            @else
            <li class="nav-item"><a href="#" data-toggle="modal" data-target="#modalLRForm"class="nav-link">Login</a></li>
            @endif
        </ul>
        <div class="nav-item cta cta-colored" >
            <div class="cart" style="border-style: none;">
                <div class="beta-select" id="count_cart">
                    @include('checkout.count_cart')
                </div>
                <div class="beta-dropdown cart-body" id="ajax_cart">
                    @include('checkout.cart')
                </div>
            </div>
        </div>
    </div>
</div>
</nav>
<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab" id="getLogin"><i class="sign-in-alt"></i>
                        Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab" id="getRegister"><i class="registered"></i>
                        Register</a>
                    </li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7-->
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                        <!--Body-->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="modal-body mb-1">
                                <div class="md-form form-sm mb-5">
                                    <i class="user-alt"></i>
                                    <label data-error="wrong" data-success="right" for="modalLRInput10">Your email</label>
                                    <input type="email" id="modalLRInput10" class="form-control form-control-sm validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="md-form form-sm mb-4">
                                    <i class="key"></i>
                                    <label data-error="wrong" data-success="right" for="modalLRInput11">Your password</label>
                                    <input type="password" id="modalLRInput11" class="form-control form-control-sm validate @error('password') is-invalid @enderror"name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="display: block;">

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="text-center mt-2">
                                    <button class="btn btn-info">Log in</button>
                                </div>
                            </div>
                        </form>
                        <!--Footer-->
                        <div class="modal-footer">
                            <div class="options text-center text-md-right mt-1">
                                <p> Not a member? <i onclick="registerForm()" style="cursor: pointer; color: #82ae46; text-decoration: underline;">Sign Up</i></p>
                                <p>
                                    @if (Route::has('password.request'))
                                    <a class="blue-text" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </p>
                            </div>
                            
                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 7-->
                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">
                        <!--Body-->
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="modal-body">
                                <div class="md-form form-sm mb-5">
                                    <i class="user-alt"></i>
                                    <label data-error="wrong" data-success="right" for="name">Your Name</label>
                                    
                                    <input type="text" id="name" class="form-control form-control-sm validate @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> 

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="md-form form-sm mb-5">
                                    <i class="user-alt"></i>
                                    <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>

                                    <input type="email" id="modalLRInput12" class="form-control form-control-sm validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> 

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="md-form form-sm mb-5">
                                    <i class="key"></i>
                                    <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>

                                    <input type="password" id="modalLRInput13" class="form-control form-control-sm validate @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="md-form form-sm mb-4">
                                    <i class="key"></i>
                                    <label data-error="wrong" data-success="right" for="modalLRInput14">Repeat password</label>

                                    <input name="password_confirmation" type="password" id="modalLRInput14" class="form-control form-control-sm validate @error('password') is-invalid @enderror"required autocomplete="new-password">
                                </div>

                                <div class="text-center form-sm mt-2">
                                    <button class="btn btn-info" type="submit">Sign up</button>
                                </div>
                            </div>
                        </form>
                        <!--Footer-->
                        <div class="modal-footer">

                            <div class="options text-right">
                                <p class="pt-1">Already have an account? <i onclick="loginForm()" style="cursor: pointer; color: #82ae46; text-decoration: underline;">Log In</i></p>
                            </div>

                            <button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!--/.Panel 8-->
                </div>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->
<form id="logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
