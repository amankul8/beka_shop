@extends('layouts.admin')
@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title d-flex justify-content-between px-4 pt-4">
                            Создание категории
                            <a href="{{ URL::previous() }}">
                                <button class="btn btn-primary">
                                    <i class="fa fa-chevron-circle-left"></i>
                                    Назад
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="col-8 m-auto">

                                <form method="POST" action="{{route('admin-categories-store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Категория</label>
                                        <input type="text" required class="form-control rounded" id="title" name="name" placeholder="Текст...">
                                    </div>

                                    <button type="submit" class="btn btn-primary float-right">Добавить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
