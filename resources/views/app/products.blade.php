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

                    <!-- Sidebar -->

                    <div class="sidebar">
                        <form action="">
                            <div class="form-group">
                                <div class="sidebar_title">
                                    <h5> Категории </h5>
                                </div>
                                <ul class="pl-2">
                                    <li class="mb-1">
                                        <div class="d-flex">
                                            <input type="checkbox">
                                            <span  class="ml-2"> Man</span>
                                        </div>
                                    </li>
                                    <li class="mb-1">
                                        <div class="d-flex">
                                            <input type="checkbox">
                                            <span  class="ml-2"> Woman</span>
                                        </div>
                                    </li>
                                    <li class="mb-1">
                                        <div class="d-flex">
                                            <input type="checkbox">
                                            <span  class="ml-2">Accessories</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <div class="sidebar_title">
                                    <h5>Модель</h5>
                                </div>
                                <ul class="pl-2">
                                    <li class="mb-1">
                                        <div class="d-flex">
                                            <input type="checkbox">
                                            <span  class="ml-2"> Black1</span>
                                        </div>
                                    </li>
                                    <li class="mb-1">
                                        <div class="d-flex">
                                            <input type="checkbox">
                                            <span  class="ml-2"> Orange1</span>
                                        </div>
                                    </li>
                                    <li class="mb-1">
                                        <div class="d-flex">
                                            <input type="checkbox">
                                            <span  class="ml-2">White1</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="form-group">
                                <div class="sidebar_title">
                                    <h5>Цвет</h5>
                                </div>
                                <ul class="pl-2">
                                    <li class="mb-1">
                                        <div class="d-flex">
                                            <input type="checkbox">
                                            <span class="ml-2"> Black</span>
                                        </div>
                                    </li>
                                    <li class="mb-1">
                                        <div class="d-flex">
                                            <input type="checkbox">
                                            <span class="ml-2"> Orange</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm m-1">
                                <span>Показать</span>
                                <i class="fa fa-filter"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Main Content -->

                    <div class="main_content">

                        <!-- Products -->

                        <div class="products_iso">
                            <div class="row">
                                <div class="col">

                                    <!-- Product Sorting -->

                                    <div class="d-flex justify-content-between">
                                        <div class="product_sorting dropdown filter-dropdown">
                                            <div class="border d-flex align-items-center rounded py-1 px-2" data-toggle="dropdown" aria-expanded="false">
                                                <h5 class="d-flex"> Фильтр  <i class="fa fa-sort-down ml-2"></i> </h5>
                                            </div>
                                            <div class=" dropdown-menu p-4">
                                                <form action="">
                                                    <div class="form-group">
                                                        <div class="sidebar_title">
                                                            <h5> Категории </h5>
                                                        </div>
                                                        <ul class="pl-2">
                                                            <li class="mb-1">
                                                                <div class="d-flex">
                                                                    <input type="checkbox">
                                                                    <span  class="ml-2"> Man</span>
                                                                </div>
                                                            </li>
                                                            <li class="mb-1">
                                                                <div class="d-flex">
                                                                    <input type="checkbox">
                                                                    <span  class="ml-2"> Woman</span>
                                                                </div>
                                                            </li>
                                                            <li class="mb-1">
                                                                <div class="d-flex">
                                                                    <input type="checkbox">
                                                                    <span  class="ml-2">Accessories</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="sidebar_title">
                                                            <h5>Модель</h5>
                                                        </div>
                                                        <ul class="pl-2">
                                                            <li class="mb-1">
                                                                <div class="d-flex">
                                                                    <input type="checkbox">
                                                                    <span  class="ml-2"> Black1</span>
                                                                </div>
                                                            </li>
                                                            <li class="mb-1">
                                                                <div class="d-flex">
                                                                    <input type="checkbox">
                                                                    <span  class="ml-2"> Orange1</span>
                                                                </div>
                                                            </li>
                                                            <li class="mb-1">
                                                                <div class="d-flex">
                                                                    <input type="checkbox">
                                                                    <span  class="ml-2">White1</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="sidebar_title">
                                                            <h5>Цвет</h5>
                                                        </div>
                                                        <ul class="pl-2">
                                                            <li class="mb-1">
                                                                <div class="d-flex">
                                                                    <input type="checkbox">
                                                                    <span class="ml-2"> Black</span>
                                                                </div>
                                                            </li>
                                                            <li class="mb-1">
                                                                <div class="d-flex">
                                                                    <input type="checkbox">
                                                                    <span class="ml-2"> Orange</span>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-sm m-1">
                                                        <span>Показать</span>
                                                        <i class="fa fa-filter"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <ul class="product_sorting">
                                            <li>
                                                <span>Показать</span>
                                                <span class="num_sorting_text">6</span>
                                                <i class="fa fa-angle-down"></i>
                                                <ul class="sorting_num">
                                                    <li class="num_sorting_btn"><span>6</span></li>
                                                    <li class="num_sorting_btn"><span>12</span></li>
                                                    <li class="num_sorting_btn"><span>24</span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Product Grid -->

                                    <div class="product-grid">

                                        <!-- Product 1 -->

                                        @foreach($products as $product)
                                            <div class="product-item men">
                                                <div class="product discount product_filter">
                                                    <div class="product_image">
                                                        <img src="{{ asset('uploads/' . $product->image_url)}}"/>
                                                    </div>
                                                    <div class="favorite favorite_left"></div>
                                                    <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center">
                                                        @if($product->pop == 1)
                                                            <span>pop</span>
                                                        @elseif($product->new == 1)
                                                            <span>new</span>
                                                        @endif
                                                    </div>
                                                    <div class="product_info">
                                                        <h6 class="product_name"><a href="single.html"> {{$product->name}} </a></h6>
                                                        <div class="product_price"> {{ $product->price }} {{ $product->currency->currency_code }} </div>
                                                    </div>
                                                </div>
                                                <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Product Sorting -->

                                    <div class="product_sorting_container product_sorting_container_bottom clearfix">
                                        <div class="pages d-flex flex-row align-items-center">
                                            <div class="page_current">
                                                <span>1</span>
                                                <ul class="page_selection">
                                                    <li><a href="#">1</a></li>
                                                    <li><a href="#">2</a></li>
                                                    <li><a href="#">3</a></li>
                                                </ul>
                                            </div>
                                            <div class="page_total"><span>of</span> 3</div>
                                            <div id="next_page_1" class="page_next"><a href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection

