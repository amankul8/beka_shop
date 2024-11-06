@extends('layouts.app')
@section('content')

        <div class="container product_section_container">
            <div class="row">
                <div class="col product_section clearfix">

                    <!-- Breadcrumbs -->

                    <div class="breadcrumbs d-flex flex-row align-items-center">
                        <ul>
                            <li><a href="{{route('home')}}">Главная</a></li>
                            <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Товары</a></li>
                        </ul>
                    </div>

                    <!-- Filter -->

                    <div class="products-filter-wrapper">
                        @foreach($categories as $category)
                            <a href="{{ route('products-filter', ['category_id' => $category->id]) }}">
                                <button class={{ $category_id == $category->id? 'active':'' }}> {{$category->name}} </button>
                            </a>
                        @endforeach
                    </div>

                    <!-- Main Content -->

                    <div class="main_content w-100">
                        <div class="products_iso">
                            <div class="row">
                                <div class="col">

                                    <!-- Product Sorting -->

                                    <!-- Product Grid -->

                                    <div class="d-flex flex-wrap align-items-center justify-content-center gap-3 mt-5">

                                        @if(count($products) > 0)
                                            @foreach($products as $product)
                                                <div class="product-card">
                                                    <div class="product-image">
                                                        <img src="{{ asset('uploads/' . $product->image_url)}}" alt=""/>
                                                        <div class="fast-btn">
                                                            Быстрый просмотр
                                                        </div>
                                                    </div>
                                                    <div class="product_info" onclick="redirectTo('/products/product/{{ $product->id }}')">
                                                        <h6 class="product_name">{{$product->name}}</h6>
                                                        <div class="product_price"> {{ $product->price }} {{ $product->currency->currency_code }} </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="alert alert-info text-center" role="alert">
                                                Товары не найдены в этой категории.
                                            </div>
                                        @endif

                                    </div>

                                    <!-- Product Sorting -->

{{--                                    <div class="product_sorting_container product_sorting_container_bottom clearfix">--}}
{{--                                        <div class="pages d-flex flex-row align-items-center">--}}
{{--                                            <div class="page_current">--}}
{{--                                                <span>1</span>--}}
{{--                                                <ul class="page_selection">--}}
{{--                                                    <li><a href="#">1</a></li>--}}
{{--                                                    <li><a href="#">2</a></li>--}}
{{--                                                    <li><a href="#">3</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <div class="page_total"><span>of</span> 3</div>--}}
{{--                                            <div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

