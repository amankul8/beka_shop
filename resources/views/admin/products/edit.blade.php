@extends('layouts.admin')
@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title d-flex justify-content-between px-4 pt-4">
                            Изменение продукта
                            <a href="{{ URL::previous() }}">
                                <button class="btn btn-primary">
                                    <i class="fa fa-chevron-circle-left"></i>
                                    Назад
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="col-8 m-auto">
                                <form method="POST" action="{{ route('admin-product-update') }}" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$product->id}}">

                                    <div class="form-group">
                                        <label for="name">Название</label>
                                        <input type="text" class="form-control rounded" required id="name" name="name" value="{{$product->name}}" placeholder="Текст...">
                                    </div>

                                    <div class="form-group">
                                        <label for="category_id"> Категория </label>
                                        <select class="form-control rounded" required id="category_id" name="category_id">
                                            <option value=""> Выберите категорию </option>
                                            @foreach($categories as $category)
                                                @if($category->id == $product->category_id)
                                                    <option selected value="{{$category->id}}">{{$category->name}}</option>
                                                @else
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="model_id"> Модель </label>
                                        <select class="form-control rounded" required id="model_id" name="model_id">
                                            <option value="">Выберите модель</option>
                                            @foreach($models as $model)
                                                @if($model->id == $product->model_id)
                                                    <option selected value="{{$model->id}}">{{$model->name}}</option>
                                                @else
                                                    <option value="{{$model->id}}">{{$model->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="color_id"> Цвет </label>
                                        <div>
                                            <select class="form-control rounded" required id="color_id" name="color_id">
                                                <option value=""> Выберите цвет </option>
                                                @foreach($colors as $color)
                                                    @if($color->id == $product->color_id)
                                                        <option selected value="{{$color->id}}"> {{$color->name}}</option>
                                                    @else
                                                        <option value="{{$color->id}}"> {{$color->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="collection_id"> Коллекция </label>
                                        <div>
                                            <select class="form-control rounded" required id="collection_id" name="collection_id">
                                                <option value=""> Выберите цвет </option>
                                                @foreach($collections as $collection)
                                                    @if($collection->id == $product->collection_id)
                                                        <option selected value="{{$collection->id}}"> {{$collection->collection_name}}</option>
                                                    @else
                                                        <option value="{{$collection->id}}"> {{$collection->collection_name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="size_id"> Размеры </label>
                                        <div>
                                            <select class="form-control rounded" required id="size_id" name="size_id">
                                                <option value=""> Выберите размер </option>
                                                @foreach($sizes as $size)
                                                    @if($size->id == $product->size_id)
                                                        <option selected value="{{$size->id}}"> {{$size->sizes}}</option>
                                                    @else
                                                        <option value="{{$size->id}}"> {{$size->sizes}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="composition"> Состав </label>
                                        <input type="text" class="form-control rounded" required id="composition" name="composition" value="{{$product->composition}}" placeholder="Текст...">
                                    </div>

                                    <div class="form-group min-quantity-input">
                                        <label for="min_quantity"> Минимальная количество </label>
                                        <input type="number" class="form-control rounded" required id="min_quantity" name="min_quantity" value="{{$product->min_quantity}}" placeholder="0">
                                    </div>

                                    <div class="form-group">
                                        <label for="price">Цена</label>
                                        <div class="currency-form-input">
                                            <input type="number" class="form-control rounded" required id="price" name="price" value="{{$product->price}}" placeholder="0">
                                            <select class="form-control rounded" required id="currency_id" name="currency_id">
                                                @foreach($currencies as $currency)
                                                    <option value="{{$currency->id}}" @if($currency->id == $product->currency->id) selected @endif>
                                                        {{$currency->currency_code}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input class="c-pointer" type="checkbox" id="new" name="new" {{$product->new? 'checked': ''}} value="1">
                                        <label class="ml-2 c-pointer" for="new"> Новый </label>
                                    </div>

                                    <div class="form-group">
                                        <input class="c-pointer" type="checkbox" id="pop" name="pop" {{$product->pop? 'checked': ''}} value="1">
                                        <label class="ml-2 c-pointer" for="pop"> Популярный </label>
                                    </div>

                                    <div class="form-group">
                                        <input class="c-pointer" type="checkbox" id="active" name="active" {{$product->active? 'checked': ''}} value="1">
                                        <label class="ml-2 c-pointer" for="active"> Активный </label>
                                    </div>

                                    <div class="form-group">
                                        <label for="description"> Мазмуну </label>
                                        <textarea class="summernote" id="description" required name="description">
                                            {{$product->description}}
                                        </textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="image"> Фото </label>
                                        <input type="file" class="form-control rounded" id="image" name="image">
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

@endsection
