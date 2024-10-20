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
                                        <label for="name">Название</label>
                                        <input type="text" class="form-control rounded" required id="name" name="name" placeholder="Текст...">
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id"> Категория </label>
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
                                        <label for="model_id"> Модель </label>
                                        <select class="form-control rounded" required id="model_id" name="model_id">
                                            <option value="">Выберите модель</option>
                                            @foreach($models as $model)
                                                <option value="{{$model->id}}">{{$model->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="color_id"> Цвет </label>
                                        <div>
                                            <select class="form-control rounded" required id="color_id" name="color_id">
                                                <option value=""> Выберите цвет </option>
                                                @foreach($colors as $color)
                                                    <option value="{{$color->id}}"> {{$color->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="collection_id"> Коллекция </label>
                                        <div>
                                            <select class="form-control rounded" required id="collection_id" name="collection_id">
                                                <option value=""> Выберите коллекцию </option>
                                                @foreach($collections as $collection)
                                                    <option value="{{$collection->id}}"> {{$collection->collection_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label> Размеры </label>
                                        <div class="product-size-input">

                                            <label for="from_size"> От </label>
                                            <select class="form-control rounded" required id="from_size" name="from_size">
                                                <option value=""> Выберите размер </option>
                                                @foreach($productSizes as $productSize)
                                                    <option value="{{$productSize}}"> {{$productSize}}</option>
                                                @endforeach
                                            </select>

                                            <label for="before_size"> к </label>
                                            <select class="form-control rounded" required id="before_size" name="before_size">
                                                <option value=""> Выберите размер </option>
                                                @foreach($productSizes as $productSize)
                                                    <option value="{{$productSize}}"> {{$productSize}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="composition"> Состав </label>
                                        <input type="text" class="form-control rounded" required id="composition" name="composition" placeholder="Состав...">
                                    </div>

                                    <div class="form-group min-quantity-input">
                                        <label for="min_quantity"> Минимальная количество </label>
                                        <input type="number" class="form-control rounded" required id="min_quantity" name="min_quantity" placeholder="0">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Цена</label>
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
                                        <label for="description"> Мазмуну </label>
                                        <textarea class="summernote" id="description" required name="description">
                                            Текст...
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="image"> Фото </label>
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
