@extends('layouts.admin')
@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title d-flex justify-content-between px-4 pt-4">
                            Изменение категории
                            <a href="{{ URL::previous() }}">
                                <button class="btn btn-primary">
                                    <i class="fa fa-chevron-circle-left"></i>
                                    Назад
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="col-8 m-auto">
                                <form method="POST" action="{{route('admin-categories-update')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$category->id}}">
                                    <div class="form-group">
                                        <label for="title">Категория</label>
                                        <input type="text" class="form-control rounded" id="title" name="name" placeholder="Текст..." value="{{$category->name}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="parent_id"> Размеры </label>
                                        <div>
                                            <select class="form-control rounded" id="parent_id" name="parent_id">
                                                <option value=""> Выберите категорию </option>
                                                @foreach($categories as $item)
                                                    @if($item->id == $category->parent_id)
                                                        <option selected value="{{$item->id}}"> {{$item->name}} </option>
                                                    @else
                                                        <option value="{{$item->id}}"> {{$item->name}} </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary float-right">Сохранить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
