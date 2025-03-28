@extends('layouts.app')

@section('head')
    <meta name="description" content="Мы предлагаем широкий спектр услуг, необходимых для создания качественной одежды и подготовки её к продаже на маркетплейсах">

    <meta property="og:title" content="MANIA FABRIC,  швейное производство в Бишкеке" />
    <meta property="og:description" content="Широкий выбор модной и качественной одежды для мужчин и женщин. Откройте для себя стильные новинки и акционные предложения." />
    <meta property="og:url" content="https://mania-fabric.ru" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Mania fabric" />
    <meta property="og:image" content="{{ asset('dist/images/logo.png') }}">
@endsection

@section('content')
    <!-- Slider -->

    <div class="main_slider" style="background-image:url({{asset('dist/images/factory/main_photo.png')}})">
        <div class="container fill_height">
            <div class="row align-items-center fill_height">
                <div class="col">
                    <div class="main_slider_content">
                        <h6>
                            Большой ассортимент тканей / Высокое качество производства
                        </h6>
                        <h1>Швейное производство полного цикла в Бишкеке</h1>
                        <div class="red_button shop_now_button"><a href="#">Оставить заявку</a></div>
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
                                <div class="owl-item product_slider_item" onclick="redirectTo('/products/product/{{ $product->id }}')">
                                    <div class="product-item">
                                        <div class="product discount">
                                            <div class="product_image">
                                                <img src="{{ asset('uploads/' . $product->image_url)}}" alt=""/>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-center flex-column p-3">
                                                <h6 class="">
                                                    <a class="text-black" href="#">{{ $product->name }}</a>
                                                </h6>
                                                <div class="text-danger"> {{ $product->price }} {{ $product->currency->currency_code }} </div>
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
            <div class="row mb-5">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Популярные модели</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-wrap align-items-center justify-content-center gap-3">

                        @foreach($pop_products as $product)
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="{{ asset('uploads/' . $product->image_url)}}" alt=""/>
                                    <div class="fast-btn" onclick="showModal(
                                        {{$product->id}},
                                        '{{ asset("uploads/" . $product->image_url)}}',
                                        '{{$product->name}}',
                                        '{{$product->colors->implode('name', ', ')}}',
                                        '{{$product->collections->implode('collection_name', ', ')}}',
                                        '{{$product->sizes}}',
                                        '{{$product->composition}}',
                                        '{{ $product->price }} {{ $product->currency->currency_code }}',
                                        '{{$product->min_quantity}}',
                                    )">
                                        Быстрый просмотр
                                    </div>
                                </div>
                                <div class="product_info" onclick="redirectTo('/products/product/{{ $product->id }}')">
                                    <h6 class="product_name"> {{$product->name}} </h6>
                                    <div class="product_price"> {{ $product->price }} {{ $product->currency->currency_code }} </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
