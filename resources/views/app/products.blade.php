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

                                        <div class="product-item men">
                                            <div class="product discount product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_1.png')}}" alt="">
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                                    <div class="product_price">$520.00<span>$590.00</span></div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>

                                        <!-- Product 2 -->

                                        <div class="product-item women">
                                            <div class="product product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_2.png')}}" alt="">
                                                </div>
                                                <div class="favorite"></div>
                                                <div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                                                    <div class="product_price">$610.00</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>

                                        <!-- Product 3 -->

                                        <div class="product-item women">
                                            <div class="product product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_3.png')}}" alt="">
                                                </div>
                                                <div class="favorite"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
                                                    <div class="product_price">$120.00</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>

                                        <!-- Product 4 -->

                                        <div class="product-item accessories">
                                            <div class="product product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_4.png')}}" alt="">
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                                                    <div class="product_price">$410.00</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>

                                        <!-- Product 5 -->

                                        <div class="product-item women men">
                                            <div class="product product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_5.png')}}" alt="">
                                                </div>
                                                <div class="favorite"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
                                                    <div class="product_price">$180.00</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>

                                        <!-- Product 6 -->

                                        <div class="product-item accessories">
                                            <div class="product discount product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_6.png')}}" alt="">
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                                    <div class="product_price">$520.00<span>$590.00</span></div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>

                                        <!-- Product 7 -->

                                        <div class="product-item women">
                                            <div class="product product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_7.png')}}" alt="">
                                                </div>
                                                <div class="favorite"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h6>
                                                    <div class="product_price">$610.00</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>

                                        <!-- Product 8 -->

                                        <div class="product-item accessories">
                                            <div class="product product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_8.png')}}" alt="">
                                                </div>
                                                <div class="favorite"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">Blue Yeti USB Microphone Blackout Edition</a></h6>
                                                    <div class="product_price">$120.00</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>

                                        <!-- Product 9 -->

                                        <div class="product-item men">
                                            <div class="product product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_9.png')}}" alt="">
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h6>
                                                    <div class="product_price">$410.00</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>

                                        <!-- Product 10 -->

                                        <div class="product-item men">
                                            <div class="product product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_10.png')}}" alt="">
                                                </div>
                                                <div class="favorite"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
                                                    <div class="product_price">$180.00</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>

                                        <!-- Product 11 -->

                                        <div class="product-item women men">
                                            <div class="product product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_5.png')}}" alt="">
                                                </div>
                                                <div class="favorite"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">Pryma Headphones, Rose Gold & Grey</a></h6>
                                                    <div class="product_price">$180.00</div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>

                                        <!-- Product 12 -->

                                        <div class="product-item accessories">
                                            <div class="product discount product_filter">
                                                <div class="product_image">
                                                    <img src="{{asset('dist/images/product_6.png')}}" alt="">
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a href="single.html">Fujifilm X100T 16 MP Digital Camera (Silver)</a></h6>
                                                    <div class="product_price">$520.00<span>$590.00</span></div>
                                                </div>
                                            </div>
                                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                                        </div>
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

