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
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Название</th>
                                        <th>Цвета</th>
                                        <th>Контроль</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="align-top"> 1 </td>
                                        <td class="align-top"> Название </td>
                                        <td class="align-top"> Цвет </td>
                                        <td class="align-top">
                                            <a href="{{route('admin-colors-edit', ['id'=>1])}}" class="btn btn-warning mr-2 btn-sm">Изменить</a>
                                            <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#basicModal">Удалить</button>

                                            <div class="modal fade" id="basicModal">
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
                                                            <form method="post" action="">
                                                                <input type="hidden" value="">
                                                                <button type="button" class="btn btn-danger"> Удалить </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>№</th>
                                        <th>Название</th>
                                        <th>Цвета</th>
                                        <th>Контроль</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
