@extends('layouts.admin')
@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title d-flex justify-content-between px-4 pt-4">
                            Изменение размера
                            <a href="{{ URL::previous() }}">
                                <button class="btn btn-primary">
                                    <i class="fa fa-chevron-circle-left"></i>
                                    Назад
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="col-8 m-auto">
                                <form method="POST" action="{{route('admin-product-sizes-update')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$productSize->id}}">
                                    <div class="form-group">
                                        <label for="title">Размера</label>
                                        <input type="text" class="form-control rounded" id="title" name="sizes" value="{{$productSize->sizes}}" placeholder="Размера...">
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
