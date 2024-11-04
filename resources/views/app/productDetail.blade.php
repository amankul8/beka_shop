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
                                    <li class="active">
                                        <img src="{{ asset('uploads/' . $product->image_url)}}" alt="" data-image="{{ asset('uploads/' . $product->image_url)}}">
                                    </li>

                                    @foreach($product->images as $image)
                                        <li>
                                            <img src="{{ asset('uploads/' . $image->url)}}" alt="" data-image="{{ asset('uploads/' . $image->url)}}">
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 image_col order-lg-2 order-1">
                            <div class="single_product_image">
                                <div class="single_product_image_background" style="background-image:url('{{ asset('uploads/' . $product->image_url)}}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product_details">
                    <div class="product_details_title">
                        <h2> {{ $product->name }} </h2>
                        <p> {!! $product->description !!} </p>
                    </div>
                    <ul>
                        <li> Категория: <i> {{ $product->category->name }} </i> </li>
                        <li> Модель: <i>{{ $product->model->name }}</i></li>
                        <li> Цвет: <i>{{ $product->color->name }}</i></li>
                        <li> Коллекция: <i>{{ $product->collection->collection_name }}</i></li>
                        <li> Размеры: <i>{{ $product->sizes }}</i></li>
                        <li> Состав: <i>{{ $product->composition }}</i></li>
                        <li> Цена: <i>{{ $product->price }} {{$product->currency->currency_code}}</i></li>
                        <li> Минимальная количетво: <i>{{ $product->min_quantity }}</i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
