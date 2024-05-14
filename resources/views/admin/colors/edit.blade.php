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
                                <form method="POST" action="{{route('admin-colors-update')}}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$color->id}}">
                                    <div class="form-group">
                                        <label for="title">Название</label>
                                        <input type="text" class="form-control rounded" id="title" name="name" value="{{$color->name}}" placeholder="Текст...">
                                    </div>

                                    <div class="form-group">
                                        <label for="color">Цвет: </label>
                                        <input type="text" required class="form-control rounded" id="color-edit-input" name="color" value="{{$color->color}}" placeholder="Цвет...">
                                        <input type="color" id="color-edit-picker" class="mt-2" style="height: 50px; width: 50px; cursor: pointer;" value="{{$color->color}}">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const colorInput = document.getElementById('color-edit-input');
            const colorPicker = document.getElementById('color-edit-picker');

            colorPicker.addEventListener('change', function(event) {
                colorInput.value = event.target.value;
            });
        });
    </script>

@endsection
