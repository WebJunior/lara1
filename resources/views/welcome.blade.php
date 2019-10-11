@extends('layout')

@section('content')
    <h1 align="center">Моя галерея</h1>
    <div class="container">
        <div class="row">

            @foreach($images as $image)
                <div class="col-md-3">
                    <img src="/{{$image->image}}" class="img-thumbnail gallery-item">
                    <a href="/show/{{$image->id}}" class="btn btn-info my-btn">Просмотреть</a>
                    <a href="/edit/{{$image->id}}" class="btn btn-warning my-btn">Изменить</a>
                    <a href="/delete/{{$image->id}}" class="btn btn-danger my-btn">Удалить</a>
                 </div>
            @endforeach
            </div>
        </div>
    </div>
@endsection
