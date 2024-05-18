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
                                        <label for="name">Название</label>
                                        <input type="text" class="form-control rounded" required id="name" name="name" value="{{$product->name}}" placeholder="Текст...">
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

@endsection
