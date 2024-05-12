@extends('layouts.app')
@section('content')

    <div class="container single_product_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="{{route('home')}}">Главная</a></li>
                        <li><a href="{{route('products')}}"><i class="fa fa-angle-right" aria-hidden="true"></i> Товары </a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Товар</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="single_product_pics">
                    <div class="row">
                        <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                            <div class="single_product_thumbnails">
                                <ul>
                                    <li>
                                        <img src="{{asset('dist/images/single_1_thumb.jpg')}}" alt="" data-image="{{asset('dist/images/single_1.jpg')}}">
                                    </li>
                                    <li class="active">
                                        <img src="{{asset('dist/images/single_2_thumb.jpg')}}" alt="" data-image="{{asset('dist/images/single_2.jpg')}}">
                                    </li>
                                    <li>
                                        <img src="{{asset('dist/images/single_3_thumb.jpg')}}" alt="" data-image="{{asset('dist/images/single_3.jpg')}}">
                                    </li>
                                    <li >
                                        <img src="{{asset('dist/images/single_2_thumb.jpg')}}" alt="" data-image="{{asset('dist/images/single_2.jpg')}}">
                                    </li>
                                    <li>
                                        <img src="{{asset('dist/images/single_3_thumb.jpg')}}" alt="" data-image="{{asset('dist/images/single_3.jpg')}}">
                                    </li>
                                    <li>
                                        <img src="{{asset('dist/images/single_3_thumb.jpg')}}" alt="" data-image="{{asset('dist/images/single_3.jpg')}}">
                                    </li>
                                    <li>
                                        <img src="{{asset('dist/images/single_3_thumb.jpg')}}" alt="" data-image="{{asset('dist/images/single_3.jpg')}}">
                                    </li>
                                    <li>
                                        <img src="{{asset('dist/images/single_3_thumb.jpg')}}" alt="" data-image="{{asset('dist/images/single_3.jpg')}}">
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 image_col order-lg-2 order-1">
                            <div class="single_product_image">
                                <div class="single_product_image_background" style="background-image:url('{{asset("dist/images/single_2.jpg")}}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product_details">
                    <div class="product_details_title">
                        <h2>Product name</h2>
                        <p> Product description</p>
                    </div>
                    <ul>
                        <li> Category: <i>Category</i> </li>
                        <li> Model: <i>Model</i></li>
                        <li> New </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
