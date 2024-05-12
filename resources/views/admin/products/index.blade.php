@extends('layouts.admin')
@section('content')

    <div class="content-body">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-between px-4 pt-2">
                                Товары
                                <a href="">
                                    <button class="btn btn-primary"> Создать товар</button>
                                </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                    <tr>
                                        <th>Название</th>
                                        <th>Категория</th>
                                        <th>Модель</th>
                                        <th>Новый</th>
                                        <th>Популярный</th>
                                        <th>Изображение</th>
                                        <th>Дата</th>
                                        <th>Контроль</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="align-top">Tiger Nixon фамщфывалмшожы </td>
                                        <td class="align-top">System Architect</td>
                                        <td class="align-top">Edinburgh</td>
                                        <td class="align-top">61</td>
                                        <td class="align-top">вва</td>
                                        <td class="align-top">$320,800</td>
                                        <td class="align-top">2011/04/25</td>
                                        <td class="align-top">
                                            <h4 class="align-center">
                                                <a href="">
                                                    <i class="fa fa-eye text-primary"></i>
                                                </a>
                                                <a href="">
                                                    <i class="fa fa-edit ml-1 text-warning"></i>
                                                </a>
                                                <i class="fa fa-trash ml-1 text-danger" style="cursor: pointer" data-toggle="modal" data-target="#basicModal"></i>
                                            </h4>

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
                                        <th>Название</th>
                                        <th>Категория</th>
                                        <th>Модель</th>
                                        <th>Новый</th>
                                        <th>Популярный</th>
                                        <th>Изображение</th>
                                        <th>Дата</th>
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
        <!-- #/ container -->
    </div>

@endsection
