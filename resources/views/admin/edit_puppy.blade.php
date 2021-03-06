@extends('admin.base')
{{--@section('title', "{{ $obj->title}}")--}}
@section('content')
    <div class="container">
        <h3 class="admin-panel__title" >Редактирование страницы {{$obj->title}}</h3>
        <form action="/admin/page/{{$obj->code}}" method="post" enctype="multipart/form-data" class="form">
            @method('PUT')
            {{ csrf_field() }}
            <div class="form-main">
                <div class="form-block">
                    <input hidden type="text" name="id" value="{{$obj->id}}" size="10">
                     <p>Код страницы<br>
                        <input type="text" name="code" value="{{$obj->code}}" size="10">
                    </p>
                    <p>Заголовок: <br>
                        <input type="text" name="title" value="{{$obj->title}}" size="255">
                    </p>
                    <p>Описание собаки: <br>
                        <textarea  name="description" cols="40" rows="5" maxlength="2000" >{{$obj->description}}

                         </textarea>
                    </p>
                    <p>Пол собаки: <br>
                        <input type="text" name="sex" value="{{$obj->sex}}" size="40">
                    </p>
                    <p>Фото: <br>
                        <input type="file" name="image" width="50">
                    </p>
                </div>
            </div>
            <button class="admin-button add-but" type="submit">
                Сохранить
            </button>
            <a class="admin-button cancle-but" href="/admin/page">
                Отмена
            </a>
        </form>
        @if(!empty($errors))
            @if($errors->any())
                <ul class="alert alert-danger" style="list-style-type: none">
                    @foreach($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            @endif
        @endif
    </div>

@endsection
