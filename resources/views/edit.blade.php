@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h1>Редактировать изображение</h1>
                <br /><span>Текущая картинка:</span>
                <img src="/{{$image->image}}" class="img-thumbnail gallery-image"/>
                <form action="/update/{{$image->id}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-control">
                        <input type="file" name="image">
                    </div>
                    <button type="submit" class="btn btn-success">Загрузить</button>
                </form>
            </div>
        </div>
    </div>
@endsection