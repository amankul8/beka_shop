@extends('layouts.app')
@section('content')
    <!-- Slider -->

    <div class="main_slider" style="background-image:url({{asset('dist/images/slider_1.jpg')}})">
        <div class="container fill_height">
            <div class="row align-items-center fill_height">
                <div class="col">
                    <div class="main_slider_content">
                        <h6>Spring / Summer Collection 2017</h6>
                        <h1>Get up to 30% Off New Arrivals</h1>
                        <div class="red_button shop_now_button"><a href="#">shop now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Best Sellers -->

    <div class="best_sellers">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Новые модели</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product_slider_container">
                        <div class="owl-carousel owl-theme product_slider">

                            @foreach($new_products as $product)
                                <div class="owl-item product_slider_item">
                                    <div class="product-item">
                                        <div class="product discount">
                                            <div class="product_image">
                                                <img src="{{ asset('uploads/' . $product->image_url)}}"/>
                                            </div>
                                            <div class="favorite favorite_left"></div>
                                            <div class="product_info">
                                                <h6 class="product_name"><a href="single.html">{{ $product->name }}</a></h6>
                                                <div class="product_price"> {{ $product->price }} {{ $product->currency->currency_code }} </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <!-- Slider Navigation -->

                        <div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                        <div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- New Arrivals -->

    <div class="new_arrivals">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Популярные модели</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".women">women's</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".accessories">accessories</li>
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".men">men's</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

                        @foreach($pop_products as $product)
                            <div class="product-item men">
                                <div class="product discount product_filter">
                                    <div class="product_image">
                                        <img src="{{ asset('uploads/' . $product->image_url)}}"/>
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a href="single.html">{{$product->name}}</a></h6>
                                        <div class="product_price"> {{ $product->price }} {{ $product->currency->currency_code }} </div>
                                    </div>
                                </div>
                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
