@extends('layouts.admin')
@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title d-flex justify-content-between px-4 pt-4">
                            Создание продукта
                            <a href="{{ URL::previous() }}">
                                <button class="btn btn-primary">
                                    <i class="fa fa-chevron-circle-left"></i>
                                    Назад
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="col-8 m-auto">
                                <form method="POST" action="{{ route('admin-product-store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group">
                                        <label class="h5" for="name">Название</label>
                                        <input type="text" class="form-control rounded" required id="name" name="name" placeholder="Текст...">
                                    </div>

                                    <div class="form-group">
                                        <label class="h5" for="category_id"> Категория </label>
                                        <div class="product-category-selector-wrapper">
                                            <input  type="hidden" name="category_id" id="product_create_category_input_id">
                                            <input class="input" type="text" id="product_create_category_input_name" disabled placeholder="Выберите">
                                            <ul class="product-category-selector">
                                                @foreach($categories as $category)
                                                    <li class="product-category-selector-item">
                                                        {{$category->name}}
                                                        @if(count($category->sub_categories) > 0)
                                                            <ul class="product-category-selector-dropdown-block">
                                                                @foreach($category->sub_categories as $sub_category)
                                                                    <li onclick="chooseCategory({{$sub_category->id}}, '{{$sub_category->name}}')"> {{$sub_category->name}} </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="h5" for="color_id"> Выберите цвета </label>
                                        <div class="d-flex align-items-center justify-content-start flex-wrap">
                                            @foreach($colors as $color)
                                                <div class="d-inline-block m-3">
                                                    <input class="c-pointer" type="checkbox" id="{{$color->name.'_id'}}" name="colors[]" value='{{$color->id}}'>
                                                    <label class="ml-2 c-pointer" for="{{$color->name.'_id'}}"> {{$color->name}} </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="h5" for="collection_id"> Коллекция </label>

                                        <div class="d-flex align-items-center justify-content-start flex-wrap">
                                            @foreach($collections as $collection)
                                                <div class="d-inline-block m-3">
                                                    <input class="c-pointer" type="checkbox" id="{{$collection->collection_name.'_id'}}" name="collections[]" value='{{$collection->id}}'>
                                                    <label class="ml-2 c-pointer" for="{{$collection->collection_name.'_id'}}"> {{$collection->collection_name}} </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="h5" > Размеры </label>
                                        <div class="product-size-input">

                                            <label for="from_size"> От </label>
                                            <select class="form-control rounded" required id="from_size" name="from_size">
                                                <option value=""> Выберите размер </option>
                                                @foreach($productSizes as $productSize)
                                                    <option value="{{$productSize}}"> {{$productSize}}</option>
                                                @endforeach
                                            </select>

                                            <label for="before_size"> до </label>
                                            <select class="form-control rounded" required id="before_size" name="before_size">
                                                <option value=""> Выберите размер </option>
                                                @foreach($productSizes as $productSize)
                                                    <option value="{{$productSize}}"> {{$productSize}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="h5" for="composition"> Состав </label>
                                        <input type="text" class="form-control rounded" required id="composition" name="composition" placeholder="Состав...">
                                    </div>

                                    <div class="form-group min-quantity-input">
                                        <label class="h5" for="min_quantity"> Минимальная количество </label>
                                        <input type="number" class="form-control rounded" required id="min_quantity" name="min_quantity" placeholder="0">
                                    </div>

                                    <div class="form-group">
                                        <label class="h5" for="name"> Цена </label>
                                        <div class="currency-form-input">
                                            <input type="number" class="form-control rounded" required id="price" name="price" placeholder="0">
                                            <select class="form-control rounded" required id="currency_id" name="currency_id">
                                                @foreach($currencies as $currency)
                                                    <option value="{{$currency->id}}" @if($loop->first) selected @endif>
                                                        {{$currency->currency_code}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input class="c-pointer" type="checkbox" id="new" name="new" value="1">
                                        <label class="ml-2 c-pointer" for="new"> Новый </label>
                                    </div>

                                    <div class="form-group">
                                        <input class="c-pointer" type="checkbox" id="pop" name="pop" value="1">
                                        <label class="ml-2 c-pointer" for="pop"> Популярный </label>
                                    </div>

                                    <div class="form-group">
                                        <input class="c-pointer" checked type="checkbox" id="active" name="active" value="1">
                                        <label class="ml-2 c-pointer" for="active"> Активный </label>
                                    </div>

                                    <div class="form-group">
                                        <label class="h5" for="description"> Описание </label>
                                        <textarea class="summernote" id="description" required name="description">
                                            Текст...
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label class="h5" for="image"> Фото </label>
                                        <input type="file" required class="form-control rounded" id="image" name="image">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Сактоо</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            const CategoryInputId$ = document.getElementById('product_create_category_input_id');
            const CategoryInputName$ = document.getElementById('product_create_category_input_name');

            window.chooseCategory = function (id, name) {
                CategoryInputId$.setAttribute('value', id);
                CategoryInputName$.setAttribute('value', name);
            }
        })();
    </script>

@endsection
