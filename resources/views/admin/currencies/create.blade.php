@extends('layouts.admin')
@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title d-flex justify-content-between px-4 pt-4">
                            Добавить валюту
                            <a href="{{ URL::previous() }}">
                                <button class="btn btn-primary">
                                    <i class="fa fa-chevron-circle-left"></i>
                                    Назад
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="col-8 m-auto">
                                <form method="POST" action="{{route('admin-currencies-store')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title"> Название валюты </label>
                                        <input type="text" required class="form-control rounded" id="title" name="currency_name" placeholder="Текст...">
                                    </div>

                                    <div class="form-group">
                                        <label for="title"> Код валюты </label>
                                        <input type="text" required class="form-control rounded" id="title" name="currency_code" placeholder="Код...">
                                    </div>

                                    <div class="form-group">
                                        <label for="exchange_rate"> Обменный курс (к сому) </label>
                                        <input type="number" step="any" required class="form-control rounded" id="exchange_rate" name="exchange_rate" placeholder="0.0">
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

