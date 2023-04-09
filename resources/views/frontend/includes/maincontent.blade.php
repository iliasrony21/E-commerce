<div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                            @foreach($products as $product)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img height="1300" width="900" src="{{asset('product/'.$product->image)}}" alt="">
                                    <div class="product-hover">
                                        <a href="{{asset('frontend')}}/assets/#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="{{asset('frontend')}}/assets/single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                <h2>Brand:{{ $product-> brand_name}}</h2>
                                <h2>Model :{{ $product-> name}}</h2>

                                <div class="product-carousel-price">
                                    <ins>$899.00</ins> <del>$999.00</del>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
