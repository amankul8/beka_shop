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
                                <form method="POST" action="{{route('admin-collections-update')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$collection->id}}">
                                    <div class="form-group">
                                        <label for="title">Название</label>
                                        <input type="text" class="form-control rounded" id="title" name="collection_name" value="{{$collection->collection_name}}" placeholder="Текст...">
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
