@extends('layouts.admin')
@section('content')

    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-title d-flex justify-content-between px-4 pt-4">
                            Цвета
                            <a href="{{route('admin-colors-create')}}">
                                <button class="btn btn-primary"> Создать цвет</button>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @if(count($colors)>0)
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Название</th>
                                            <th>Цвета</th>
                                            <th>Код</th>
                                            <th>Контроль</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($colors as $index=>$color)
                                                <tr>
                                                    <td class="align-top"> {{$index+1}} </td>
                                                    <td class="align-top"> {{$color->name}} </td>
                                                    <td class="align-top">
                                                        <svg height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                                                            <circle r="20" cx="20" cy="20" fill="{{$color->color}}" />
                                                        </svg>
                                                    </td>
                                                    <td class="align-top"> {{$color->color}} </td>
                                                    <td class="align-top">
                                                        <a href="{{route('admin-colors-edit', ['id'=>$color->id])}}" class="btn btn-warning mr-2 btn-sm">Изменить</a>
                                                        <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#basicModal{{$color->id}}">Удалить</button>

                                                        <div class="modal fade" id="basicModal{{$color->id}}">
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
                                                                        <form method="post" action="{{route('admin-colors-delete')}}">
                                                                            @csrf
                                                                            <input type="hidden" name="id" value="{{$color->id}}">
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
                                            <th>Цвета</th>
                                            <th>Код</th>
                                            <th>Контроль</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    <p>Нет цветов</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
