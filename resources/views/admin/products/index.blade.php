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
                                <a href="{{route('admin-product-create')}}">
                                    <button class="btn btn-primary"> Добавить товар</button>
                                </a>
                            </div>
                            <div class="table-responsive">
                                @if(count($products) > 0)
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                        <tr>
                                            <th>Изображение</th>
                                            <th>Название</th>
                                            <th>Категория</th>
                                            <th>Новый</th>
                                            <th>Популярный</th>
                                            <th>Ативен</th>
                                            <th>Дата</th>
                                            <th>Контроль</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td class="align-top">
                                                        <img style="height: 60px; border-radius: 5%" src="{{asset('uploads/'.$product->image_url)}}" alt="">
                                                    </td>
                                                    <td class="align-top"> {{$product->name}} </td>
                                                    <td class="align-top"> {{$product->category->name}} </td>
                                                    <td class="align-top">
                                                        @if($product->new == 1)
                                                            <span> Да </span>
                                                        @else
                                                            <span> Нет </span>
                                                        @endif
                                                    </td>
                                                    <td class="align-top">
                                                        @if($product->pop == 1)
                                                            <span> Да </span>
                                                        @else
                                                            <span> Нет </span>
                                                        @endif
                                                    </td>
                                                    <td class="align-top">
                                                        @if($product->active == 1)
                                                            <span> Да </span>
                                                        @else
                                                            <span> Нет </span>
                                                        @endif
                                                    </td>
                                                    <td class="align-top"> {{$product->created_at}} </td>
                                                    <td class="align-top">
                                                        <h4 class="align-center">
                                                            <a href="{{route('admin-product-show',['id'=>$product->id])}}">
                                                                <i class="fa fa-eye text-primary"></i>
                                                            </a>
                                                            <a href="{{route('admin-product-edit', ['id'=>$product->id])}}">
                                                                <i class="fa fa-edit ml-1 text-warning"></i>
                                                            </a>
                                                            <i class="fa fa-trash ml-1 text-danger" style="cursor: pointer" data-toggle="modal" data-target="#basicModal{{$product->id}}"></i>
                                                        </h4>

                                                        <div class="modal fade" id="basicModal{{$product->id}}">
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
                                                                        <form method="post" action="{{route('admin-product-delete', ['id'=>$product->id])}}">
                                                                            @csrf
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
                                            <th>Изображение</th>
                                            <th>Название</th>
                                            <th>Категория</th>
                                            <th>Новый</th>
                                            <th>Популярный</th>
                                            <th>Дата</th>
                                            <th>Контроль</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                @else
                                    <p> Нет продуктов </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>

@endsection
