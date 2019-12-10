@extends('layouts.app')
@section('content')


    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="/posts/{{$post->id}}">
    @method('PATCH')
    @csrf
    <div>
        <div>
            <p>Topic</p>
            <input type="text" name="title" value="{{$post->title}}">
        </div>
        <div>
            <p>Text</p>
            <textarea name="post">{{$post->post}}</textarea>
        </div>
        <button type="submit">EDIT</button>
    </div>
</form>
<form method="POST" action="/posts/{{$post->id}}">
    @csrf
    {{method_field('DELETE')}}


    <button type="submit">
        {{ __('Delete') }}
    </button>


</form>
</body>
</html>

@endsection
