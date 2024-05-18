@extends('layouts.admin')
@section('content')

    <div class="content-body">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-title d-flex justify-content-between px-4 pt-4">
                            Информация о товаре
                            <a href="{{ URL::previous() }}">
                                <button class="btn btn-primary">
                                    <i class="fa fa-chevron-circle-left"></i>
                                    Назад
                                </button>
                            </a>
                        </div>
                        <div class="card-body">
                                <div class="mb-2">
                                    <strong > №: </strong>
                                    <div class="border rounded bg-light p-2 mt-1">
                                        {{ $product->id }}
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <strong     class="col-md-1"> Название: </strong>
                                    <div class="border rounded bg-light p-2 mt-1" >
                                        {{ $product->name}}
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <strong > Категория: </strong>
                                    <div class="border rounded bg-light p-2 mt-1" >
                                        {{ $product->category->name }}
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <strong > Модель: </strong>
                                    <div class="border rounded bg-light p-2 mt-1" >
                                        {{ $product->model->name }}
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <strong > Цвет: </strong>
                                    <div class="border rounded bg-light p-2 mt-1" >
                                        {{ $product->color->name }}
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <strong > Популярный: </strong>
                                    <div class="border rounded bg-light p-2 mt-1" >
                                        {{ $product->pop ? 'Да': 'Нет' }}
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <strong > Новый: </strong>
                                    <div class="border rounded bg-light p-2 mt-1" >
                                        {{ $product->new ? 'Да': 'Нет' }}
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <strong > Ативен: </strong>
                                    <div class="border rounded bg-light p-2 mt-1" >
                                        {{ $product->active ? 'Да': 'Нет' }}
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <strong > Описание товара: </strong>
                                    <div class="border rounded bg-light p-2 mt-1">
                                        {!! $product->description !!}
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <strong > Главное фото: </strong>
                                    <div class="border rounded bg-light p-2 mt-1">
                                        <img  height="120" src="{{ asset('uploads/' . $product->image_url)}}" alt="">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <strong > Дополнительные фотографии: </strong>
                                    <div class="border rounded bg-light p-2 mt-1 d-flex flex-wrap">
                                        @foreach($product->images as $image)
                                            <div class="d-flex p-2 border rounded m-2">

                                                <img height="120" src="{{ asset('uploads/' . $image->url)}}" alt="">

                                                <div class="d-flex flex-column align-items-center">

                                                    <i class="fa fa-edit ml-1 text-warning" style="cursor: pointer" data-toggle="modal" data-target="#changeModalCenter{{$image->id}}"></i>

                                                    <div class="modal fade" id="changeModalCenter{{$image->id}}">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <form method="POST" action="{{route('admin-product-image-update')}}" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="image_id" value="{{$image->id}}">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title">Изменение фото</h5>
                                                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                        <div class="form-group">
                                                                            <input class="form-control" required type="text" name="name" value="{{$image->name}}" placeholder="Название фото">
                                                                        </div>
                                                                        <div class="form-control">
                                                                            <input type="file" required name="image">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                                                        <button type="submit" class="btn btn-primary">Сохранить</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <i class="fa fa-trash ml-1 text-danger" style="cursor: pointer" data-toggle="modal" data-target="#basicModal{{ $image->id }}_image"></i>

                                                    <div class="modal fade" id="basicModal{{ $image->id }}_image">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">Удаление фото</h5>
                                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <h5 class="text-danger">Вы действительно хатите удалить?</h5>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
                                                                    <form method="post" action="{{route('admin-product-image-delete', ['id'=>$image->id])}}">
                                                                        @csrf
                                                                        <input type="hidden" value="">
                                                                        <button type="submit" class="btn btn-danger"> Удалить </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="p-2 m-2 d-flex align-items-end">
                                            <button class="btn btn-primary" data-toggle="modal" data-target="#createModalCenter">
                                                Добавить фото
                                            </button>

                                            <div class="modal fade" id="createModalCenter">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <form method="POST" action="{{route('admin-product-image-store')}}" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Добавление фото</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                                <div class="form-group">
                                                                    <input class="form-control" required type="text" name="name" placeholder="Название фото">
                                                                </div>
                                                                <div class="form-control">
                                                                    <input type="file" required name="image">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                                                                <button type="submit" class="btn btn-primary">Сохранить</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="d-flex float-right">
                                    <a href="{{route('admin-product-edit', ['id'=>$product->id])}}" class="btn btn-warning mr-2">Изменить</a>
                                    <button class="btn btn-danger" data-toggle="modal" data-target="#basicModal{{$product->id}}_product">Удалить</button>

                                    <div class="modal fade" id="basicModal{{$product->id}}_product">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Удаление товара</h5>
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
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
