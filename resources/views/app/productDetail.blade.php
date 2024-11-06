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
                        <li class="mb-1">
                            <span class="d-inline-block w-50 font-weight-bold"> Категория: </span>
                            <span> {{ $product->category->name }} </span>
                        </li>
                        <li class="mb-1">
                            <span class="d-inline-block w-50 font-weight-bold"> Модель: </span>
                            <span> {{ $product->model->name }} </span>
                        </li>
                        <li class="mb-1">
                            <span class="d-inline-block w-50 font-weight-bold"> Цвет: </span>
                            <span> {{ $product->color->name }} </span>
                        </li>
                        <li class="mb-1">
                            <span class="d-inline-block w-50 font-weight-bold"> Коллекция: </span>
                            <span> {{ $product->collection->collection_name }} </span>
                        </li>
                        <li class="mb-1">
                            <span class="d-inline-block w-50 font-weight-bold"> Размеры: </span>
                            <span> {{ $product->sizes }} </span>
                        </li>
                        <li class="mb-1">
                            <span class="d-inline-block w-50 font-weight-bold"> Состав: </span>
                            <span> {{ $product->composition }} </span>
                        </li>
                        <li class="mb-1">
                            <span class="d-inline-block w-50 font-weight-bold"> Цена: </span>
                            <span> {{ $product->price }} {{$product->currency->currency_code}} </span>
                        </li>
                        <li class="mb-1">
                            <span class="d-inline-block w-50 font-weight-bold"> Минимальная количетво: </span>
                            <span> {{ $product->min_quantity }} </span>
                        </li>
                        <li class="mt-4">
                            <span class="d-block w-50 font-weight-bold"> Описание: </span>
                            {!! $product->description !!}
                        </li>
                    </ul>

                    <div class="container d-flex justify-content-center mt-4">
                        <button type="button" class="btn btn-info"> Связаться с производителем </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
