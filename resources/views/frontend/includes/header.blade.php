<div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="{{ asset('frontend') }}/assets/#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="{{ asset('frontend') }}/assets/#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="{{ asset('frontend') }}/assets/cart.html"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="{{ asset('frontend') }}/assets/checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user"></i> Registration</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="{{asset('frontend')}}/assets/#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{asset('frontend')}}/assets/#">USD</a></li>
                                    <li><a href="{{asset('frontend')}}/assets/#">INR</a></li>
                                    <li><a href="{{asset('frontend')}}/assets/#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="{{asset('frontend')}}/assets/#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{asset('frontend')}}/assets/#">English</a></li>
                                    <li><a href="{{asset('frontend')}}/assets/#">French</a></li>
                                    <li><a href="{{asset('frontend')}}/assets/#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
