@extends('layouts.admin')
@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title d-flex justify-content-between px-4 pt-4">
                            Валюта
                            <a href="{{route('admin-currencies-create')}}">
                                <button class="btn btn-primary"> Добавить валюту </button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($currencies) > 0)
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Название</th>
                                            <th>Код</th>
                                            <th>Обменный курс</th>
                                            <th>Контроль</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($currencies as $index=>$currency)
                                                <tr>
                                                    <td class="align-top"> {{$index+1}} </td>
                                                    <td class="align-top"> {{$currency->currency_name}} </td>
                                                    <td class="align-top"> {{$currency->currency_code}} </td>
                                                    <td class="align-top"> {{$currency->exchange_rate}} </td>
                                                    <td class="align-top">
                                                        <a href="{{route('admin-currencies-edit', ['id'=>$currency->id])}}" class="btn btn-warning mr-2 btn-sm">Изменить</a>
                                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#basicModal{{$currency->id}}">Удалить</button>

                                                        <div class="modal fade" id="basicModal{{$currency->id}}">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Удаление</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <h5 class="text-danger">Вы действительно хатите удалить?</h5>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                                                                        <form method="post" action="{{route('admin-currencies-delete')}}">
                                                                            @csrf
                                                                            <input type="hidden" name="id" value="{{$currency->id}}">
                                                                            <button type="submit" class="btn btn-danger"> Удалить </button>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>№</th>
                                            <th>Название</th>
                                            <th>Код</th>
                                            <th>Обменный курс</th>
                                            <th>Контроль</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    <p>Нет Валют</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
