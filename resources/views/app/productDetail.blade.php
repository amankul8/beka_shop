
@extends('layouts.app')

@section('title', 'MANIA FABRIC, подробно')

@section('head')
    <meta name="description" content="{{$product->name . $product->collections->implode('collection_name', ', ') . $product->composition . $product->price . $product->currency->currency_code }}">

    <meta property="og:title" content="{{ $product->name }}" />
    <meta property="og:description" content="{{$product->name . $product->collections->implode('collection_name', ', ') . $product->composition . $product->price . $product->currency->currency_code }}" />
    <meta property="og:url" content="https://mania-fabric.ru/products/product/{{$product->id}}" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Mania fabric" />
    <meta property="og:image" content="{{ asset('uploads/' . $product->image_url)}}">
@endsection

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
                                        <img class="rounded" src="{{ asset('uploads/' . $product->image_url)}}" alt="" data-image="{{ asset('uploads/' . $product->image_url)}}">
                                    </li>

                                    @foreach($product->images as $image)
                                        <li>
                                            <img class="rounded" src="{{ asset('uploads/' . $image->url)}}" alt="" data-image="{{ asset('uploads/' . $image->url)}}">
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 image_col order-lg-2 order-1">
                            <div class="single_product_image">
                                <div class="single_product_image_background rounded" style="background-image:url('{{ asset('uploads/' . $product->image_url)}}')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="product_details">

                    <ul>
                        <h3 class="h3 mb-4"> {{ $product->name }} </h3>
                        <li> <h4 class="h4 mb-3"> Характеристики и описание </h4> </li>
                        <li class="mb-2 d-flex">
                            <span class="d-inline-block w-50 font-weight-bold"> Категория: </span>
                            <span class="d-inline-block w-50"> {{ $product->category->parent->name . ' / ' . $product->category->name }} </span>
                        </li>
                        <li class="mb-2 d-flex">
                            <span class="d-inline-block w-50 font-weight-bold"> Цвет: </span>
                            <span class="d-inline-block w-50"> {{ $product->colors->implode('name', ', ') }} </span>
                        </li>
                        <li class="mb-2 d-flex">
                            <span class="d-inline-block w-50 font-weight-bold"> Коллекция: </span>
                            <span class="d-inline-block w-50"> {{ $product->collections->implode('collection_name', ', ') }} </span>
                        </li>
                        <li class="mb-2 d-flex">
                            <span class="d-inline-block w-50 font-weight-bold"> Размеры: </span>
                            <span class="d-inline-block w-50"> {{ $product->sizes }} </span>
                        </li>
                        <li class="mb-2 d-flex">
                            <span class="d-inline-block w-50 font-weight-bold"> Состав: </span>
                            <span class="d-inline-block w-50"> {{ $product->composition }} </span>
                        </li>
                        <li class="mb-2 d-flex">
                            <span class="d-inline-block w-50 font-weight-bold"> Минимальная количетво: </span>
                            <span> {{ $product->min_quantity }} </span>
                        </li>
                        <li class="mt-4">
                            <span class="d-inline-block w-50 display-6 text-danger"> {{ $product->price }} {{$product->currency->currency_code}} </span>
                        </li>
                        <li class="mt-4">
                            <span class="d-block w-50 font-weight-bold"> Описание: </span>
                            {!! $product->description !!}
                        </li>
                    </ul>

                    <div class="container d-flex justify-content-center mt-4">
                        <a
                            href="https://wa.me/996701114565/?text=Здравствуйте, меня интересует эта модель одежды: https://mania-fabric.ru/products/product/{{$product->id}}"
                            target="_blank"
                        >
                            <button type="button" class="btn btn-info"> Связаться с производителем </button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
